<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram location response model. Missing fields may be null.
 * @method string getPk()
 * @method string getName()
 * @method string getAddress()
 * @method string getCity()
 * @method float getLat()
 * @method float getLng()
 */
class Location extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['pk'=>'string', 'name'=>'string', 'address'=>'string', 'city'=>'string', 'lat'=>'float', 'lng'=>'float']; }
