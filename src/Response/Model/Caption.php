<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram caption response model. Missing fields may be null.
 * @method string getPk()
 * @method string getText()
 * @method int getCreatedAt()
 * @method Profile getUser()
 */
class Caption extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['pk'=>'string', 'text'=>'string', 'created_at'=>'int', 'user'=>'Profile']; }
