<?php
declare(strict_types=1);
namespace JsonScraper;
class Client {
    private string $key;
    private string $baseUrl;
    public function __construct(string $licenseKey, ?string $baseUrl=null, private float $timeout=30, private int $retries=0, private ?int $cacheTimeout=null, private bool $models=false) {
        if (trim($licenseKey)==='') throw new \InvalidArgumentException('A product and license key are required');
        $baseUrl=$baseUrl ?? 'https://ig.jsonscraper.com';
        $url=parse_url($baseUrl);
        if (!$url || empty($url['host']) || isset($url['user']) || isset($url['pass']) || isset($url['query']) || isset($url['fragment']) || !in_array($url['scheme']??'',['https','http'],true) || ($url['scheme']!=='https' && !in_array($url['host'],['localhost','127.0.0.1','[::1]'],true))) throw new \InvalidArgumentException('Use an HTTPS base URL');
        if(!is_finite($timeout) || $timeout<=0 || $retries<0 || $retries>5) throw new \InvalidArgumentException('Invalid timeout or retries');
        $this->key=$licenseKey; $this->baseUrl=rtrim($baseUrl,'/');
    }
    public function request(string $path, array $params=[]): mixed {
        if(!preg_match('~^/[A-Za-z0-9_/-]+$~D',$path) || str_contains($path,'//') || str_contains($path,'..')) throw new \InvalidArgumentException('Use an API path, not a URL');
        $params=array_filter($params,static fn($v)=>$v!==null);
        if($this->cacheTimeout!==null)$params['cache_timeout']=$params['cache_timeout']??$this->cacheTimeout;
        $params['license_key']=$this->key;
        foreach($params as &$v) if(is_bool($v))$v=$v?'true':'false'; unset($v);
        for($attempt=0;$attempt<=$this->retries;$attempt++){
            $retryAfter=null;
            $ch=curl_init($this->baseUrl.$path.'?'.http_build_query($params,'','&',PHP_QUERY_RFC3986));
            curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_FOLLOWLOCATION=>false,CURLOPT_CONNECTTIMEOUT_MS=>(int)ceil($this->timeout*1000),CURLOPT_TIMEOUT_MS=>(int)ceil($this->timeout*1000),CURLOPT_HTTPHEADER=>['Accept: application/json','User-Agent: jsonscraper-php/0.1.0'],CURLOPT_HEADERFUNCTION=>static function($ch,$line)use(&$retryAfter){if(stripos($line,'Retry-After:')===0)$retryAfter=trim(substr($line,12));return strlen($line);}]);
            $body=curl_exec($ch);$status=(int)curl_getinfo($ch,CURLINFO_RESPONSE_CODE);$type=(string)curl_getinfo($ch,CURLINFO_CONTENT_TYPE);curl_close($ch);
            if($body===false)throw new \RuntimeException('Unable to reach jsonscraper API');
            if($status>=200 && $status<300){
                if(!str_contains(strtolower($type),'json'))return $body;
                try{$data=json_decode($body,true,512,JSON_THROW_ON_ERROR|JSON_BIGINT_AS_STRING);return $this->models && is_array($data)?new \JsonScraper\Response\APIResponse($data):$data;}catch(\JsonException){throw new \RuntimeException('Invalid JSON response');}
            }
            if($attempt===$this->retries || !in_array($status,[429,502,503,504],true))throw new APIError($status,$retryAfter);
            sleep($retryAfter!==null && ctype_digit($retryAfter)?min(60,(int)$retryAfter):min(2**$attempt,30));
        }
    }
}
