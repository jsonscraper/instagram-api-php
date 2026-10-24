<?php

namespace JsonScraper\Response\Model;

use JsonScraper\AutoPropertyMapper;

/**
 * LabelTop.
 * 
 * @method string   getUri()
 * @method string[] getUrlList()
 * @method int      getWidth()
 * @method int      getHeight()
 * @method bool     isUri()
 * @method bool     isUrlList()
 * @method bool     isWidth()
 * @method bool     isHeight()
 * @method $this    setUri(string $value)
 * @method $this    setUrlList(string[] $value)
 * @method $this    setWidth(int $value)
 * @method $this    setHeight(int $value)
 * @method $this    unsetUri()
 * @method $this    unsetUrlList()
 * @method $this    unsetWidth()
 * @method $this    unsetHeight()
 */
class LabelTop extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'uri'       => 'string',
        'url_list'  => 'string[]',
        'width'     => 'int',
        'height'    => 'int'
    ];
}
