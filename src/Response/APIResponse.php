<?php
namespace JsonScraper\Response;
/**
 * Instagram API envelope. Unknown response fields are retained.
 * @method string getStatus()
 * @method string getMessage()
 * @method Model\Instagram getIg()
 * @method bool getRateLimitReached()
 * @method string getTimestamp()
 */
class APIResponse extends \JsonScraper\Response {
 const JSON_PROPERTY_MAP=['status'=>'string','message'=>'string','ig'=>'Model\\Instagram','rate_limit_reached'=>'bool','timestamp'=>'string'];
}
