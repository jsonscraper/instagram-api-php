<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram imagecandidate response model. Missing fields may be null.
 * @method int getWidth()
 * @method int getHeight()
 * @method string getUrl()
 */
class ImageCandidate extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['width'=>'int', 'height'=>'int', 'url'=>'string']; }
