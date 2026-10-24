<?php
require __DIR__.'/vendor/autoload.php';

$ig = new JsonScraper\Instagram(getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'), retries: 1);
print_r($ig->v1_user_by_username(['username'=>'apple', 'cache_timeout'=>60]));
$tiktok = new JsonScraper\TikTok(getenv('JSONSCRAPER_TIKTOK_LICENSE_KEY'));
$video = $tiktok->get_video_by_id(['video_id'=>'7106855913906081070', 'cache_timeout'=>60]);
echo $video['tiktok']['aweme_detail']['aweme_id'];
