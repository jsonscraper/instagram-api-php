<?php
namespace JsonScraper\Response\Model;
/**
 * Extensible Instagram comment response model. Missing fields may be null.
 * @method string getPk()
 * @method string getText()
 * @method int getCreatedAt()
 * @method int getCreatedAtUtc()
 * @method int getCommentLikeCount()
 * @method int getChildCommentCount()
 * @method Profile getUser()
 */
class Comment extends \JsonScraper\AutoPropertyMapper { const JSON_PROPERTY_MAP=['pk'=>'string', 'text'=>'string', 'created_at'=>'int', 'created_at_utc'=>'int', 'comment_like_count'=>'int', 'child_comment_count'=>'int', 'user'=>'Profile']; }
