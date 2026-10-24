<?php
require dirname(__DIR__).'/vendor/autoload.php';
$client=new JsonScraper\Instagram(getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'));
print_r($client->request('/v1/media/by/code',['code'=>'DT23hQ-EgkI', 'cache_timeout'=>60]));
