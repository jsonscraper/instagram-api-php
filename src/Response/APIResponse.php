<?php
namespace JsonScraper\Response;
/**
 * Instagram API envelope with endpoint-aware LazyJsonMapper payload models.
 * @method string getStatus()
 * @method string getMessage()
 * @method bool getRateLimitReached()
 * @method string getTimestamp()
 */
class APIResponse extends \JsonScraper\Response {
 const JSON_PROPERTY_MAP=['status'=>'string','message'=>'string','ig'=>'mixed','rate_limit_reached'=>'bool','timestamp'=>'string'];
 private string $endpoint='';
 public function withEndpoint(string $path): self {$this->endpoint=$path;return $this;}
 /** @return Model\Profile|Model\Media|Model\Comment|Model\Collection|Model\Location|Model\Hashtag|Model\Payload|array|null */
 public function getIg(): mixed {
  $payload=$this->_getProperty('ig');
  if(!is_array($payload))return $payload;
  if(array_is_list($payload))return array_map(fn($item)=>is_array($item)?$this->mapPayload($item):$item,$payload);
  return $this->mapPayload($payload);
 }
 private function mapPayload(array $data): \JsonScraper\AutoPropertyMapper {
  if(isset($data['items'])||isset($data['users'])||isset($data['comments'])||isset($data['medias']))return new Model\Collection($data);
  if(isset($data['username']))return new Model\Profile($data);
  if(isset($data['media_type'])||isset($data['code']))return new Model\Media($data);
  if(isset($data['text'])&&isset($data['user']))return new Model\Comment($data);
  if(str_contains($this->endpoint,'/location/'))return new Model\Location($data);
  if(str_contains($this->endpoint,'/hashtag/'))return new Model\Hashtag($data);
  return new Model\Payload($data);
 }
}
