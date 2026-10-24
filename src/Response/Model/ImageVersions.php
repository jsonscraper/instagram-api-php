<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram imageversions response model. Missing fields may be null.
 * @method ImageCandidate[] getCandidates()
 */
class ImageVersions extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['candidates'=>'ImageCandidate[]']; }
