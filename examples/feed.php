<?php
require dirname(__DIR__).'/vendor/autoload.php';
$client=new JsonScraper\Instagram(getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'));
print_r($client->request('/v1/user/medias/chunk',['user_id'=>'5821462185', 'end_cursor'=>'', 'cache_timeout'=>60]));
