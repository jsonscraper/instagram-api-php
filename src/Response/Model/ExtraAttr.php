<?php

namespace JsonScraper\Response\Model;

use JsonScraper\AutoPropertyMapper;

/**
 * ExtraAttr.
 * 
 * @method string   getIsLive()
 * @method bool     isIsLive()
 * @method $this    setIsLive(bool $value)
 * @method $this    unsetIsLive()
 */
class ExtraAttr extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'is_live' => 'bool'
    ];
}
