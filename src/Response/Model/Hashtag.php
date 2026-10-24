<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram hashtag response model. Missing fields may be null.
 * @method string getId()
 * @method string getName()
 * @method int getMediaCount()
 */
class Hashtag extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['id'=>'string', 'name'=>'string', 'media_count'=>'int']; }
