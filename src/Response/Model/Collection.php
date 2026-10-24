<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram collection response model. Missing fields may be null.
 * @method Media[] getItems()
 * @method Media[] getMedias()
 * @method Profile[] getUsers()
 * @method Comment[] getComments()
 * @method string getNextMaxId()
 * @method string getNextMinId()
 * @method string getEndCursor()
 * @method bool getHasNextPage()
 * @method bool getMoreAvailable()
 * @method int getNumResults()
 */
class Collection extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['items'=>'Media[]', 'medias'=>'Media[]', 'users'=>'Profile[]', 'comments'=>'Comment[]', 'next_max_id'=>'string', 'next_min_id'=>'string', 'end_cursor'=>'string', 'has_next_page'=>'bool', 'more_available'=>'bool', 'num_results'=>'int']; }
