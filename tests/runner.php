<?php
require dirname(__DIR__).'/vendor/autoload.php';
try{
 $c=new JsonScraper\Client('contract-secret',getenv('PRODUCT')?:'tiktok',getenv('BASE_URL'),(float)(getenv('TIMEOUT')?:3),(int)(getenv('RETRIES')?:0));
 $data=$c->request(getenv('API_PATH'),['video_id'=>'a&b?x=1+/Ю','license_key'=>'override','count'=>0,'flag'=>false]);
 echo is_string($data)?$data:json_encode($data,JSON_THROW_ON_ERROR);
}catch(JsonScraper\APIError $e){echo json_encode(['error'=>$e->status]);}catch(Throwable $e){echo json_encode(['error'=>'transport']);}
