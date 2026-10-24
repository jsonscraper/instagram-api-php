<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram media response model. Missing fields may be null.
 * @method string getPk()
 * @method string getId()
 * @method string getCode()
 * @method int getMediaType()
 * @method int getTakenAt()
 * @method Caption getCaption()
 * @method Profile getUser()
 * @method int getLikeCount()
 * @method int getCommentCount()
 * @method int getPlayCount()
 * @method int getViewCount()
 * @method ImageVersions getImageVersions2()
 * @method VideoVersion[] getVideoVersions()
 * @method Media[] getCarouselMedia()
 */
class Media extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['pk'=>'string', 'id'=>'string', 'code'=>'string', 'media_type'=>'int', 'taken_at'=>'int', 'caption'=>'Caption', 'user'=>'Profile', 'like_count'=>'int', 'comment_count'=>'int', 'play_count'=>'int', 'view_count'=>'int', 'image_versions2'=>'ImageVersions', 'video_versions'=>'VideoVersion[]', 'carousel_media'=>'Media[]']; }
