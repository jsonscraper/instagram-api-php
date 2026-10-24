<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram videoversion response model. Missing fields may be null.
 * @method string getId()
 * @method int getType()
 * @method int getWidth()
 * @method int getHeight()
 * @method string getUrl()
 */
class VideoVersion extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['id'=>'string', 'type'=>'int', 'width'=>'int', 'height'=>'int', 'url'=>'string']; }
