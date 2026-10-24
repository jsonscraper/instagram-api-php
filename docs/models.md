# Instagram response models with LazyJsonMapper

The PHP SDK supports array responses and an opt-in LazyJsonMapper model interface. The model layer preserves unknown fields and provides virtual getters for PHP/IDE integrations.

```php
<?php
require __DIR__.'/vendor/autoload.php';
$client = new JsonScraper\Instagram(getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'), models: true);
$response = $client->v1_user_by_username(['username'=>'apple','cache_timeout'=>60]);
if ($response->isOk() && $response->getIg()) {
    $profile = $response->getIg();
    echo $profile->getUsername(), PHP_EOL;
    echo $profile->getFullName(), PHP_EOL;
    echo $profile->getPk(), PHP_EOL; // Preserve IDs as strings.
    echo $profile->getFollowerCount(), PHP_EOL;
}
$raw = $response->exportObjectDataCopy('array');
```

## Payload models

`APIResponse → getIg()` chooses an extensible payload model from the response shape. Profiles become `Profile`; media become `Media`; list envelopes become `Collection`; location and hashtag endpoints use `Location` and `Hashtag`; other objects use `Payload`. A top-level payload list becomes an array of models. Arrays remain the default when `models: false`.

```text
APIResponse → getIg()
├── Profile → getUsername(), getPk(), getFollowerCount()
├── Media → getUser(), getCaption(), getVideoVersions(), getImageVersions2()
│   ├── Caption → getText()
│   ├── VideoVersion[] → getUrl(), getWidth(), getHeight()
│   └── ImageVersions → ImageCandidate[]
├── Collection → getItems(), getUsers(), getComments(), getNextMaxId()
├── Comment → getText(), getUser()
├── Location → getName(), getLat(), getLng()
└── Hashtag → getName(), getMediaCount()
```

```php
$client = new JsonScraper\Instagram(getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'), models: true);
$response = $client->v1_user_medias_chunk(['user_id'=>'5821462185','cache_timeout'=>60]);
if ($response->isOk()) {
    foreach ($response->getIg()?->getItems() ?? [] as $media) {
        echo $media->getCode(), PHP_EOL;
        echo $media->getCaption()?->getText() ?? '', PHP_EOL;
    }
}
```

Collection and media fields vary by API version. Inspect the current response before choosing a getter, and handle absent/null fields. New upstream fields remain preserved. `models: false` returns the full envelope unchanged, including fields the API adds later. Inspect `src/Response/Model/Instagram.php` for mapped fields. Missing optional properties can be null.
