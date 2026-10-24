<?php
require dirname(__DIR__).'/vendor/autoload.php';

$client = new JsonScraper\Instagram(getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'), models: true);
$response = $client->v1_user_by_username(['username'=>'apple', 'cache_timeout'=>60]);
if ($response->isOk() && $response->getIg()) {
    echo $response->getIg()->getUsername();
}
