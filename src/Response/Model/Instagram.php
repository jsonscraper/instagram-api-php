<?php
namespace JsonScraper\Response\Model;
/**
 * Public Instagram profile. Unknown upstream fields remain accessible.
 * @method string getPk()
 * @method string getUsername()
 * @method string getFullName()
 * @method bool getIsPrivate()
 * @method bool getIsVerified()
 * @method int getMediaCount()
 * @method int getFollowerCount()
 * @method int getFollowingCount()
 */
class Instagram extends \JsonScraper\AutoPropertyMapper {
 const JSON_PROPERTY_MAP=['pk'=>'string','username'=>'string','full_name'=>'string','is_private'=>'bool','is_verified'=>'bool','media_count'=>'int','follower_count'=>'int','following_count'=>'int','biography'=>'string','external_url'=>'string'];
}
