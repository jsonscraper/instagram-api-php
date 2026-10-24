# Instagram php request examples

Every file below is a complete single-request CLI program with environment-based authentication, all documented query options, timeout configuration, error handling and full response output. Sample defaults come from Postman; replace account names, IDs and URLs for your use case. `--help` requires no API key and makes no network request.

Set `JSONSCRAPER_INSTAGRAM_LICENSE_KEY` and install the SDK as described in the main README. Each execution makes one live request and may consume quota. None of these programs loops through a feed automatically.

## Get user info by ID

[Open the complete example](endpoints/v1_user_by_id.php) · `GET /v1/user/by/id`

```sh
php examples/endpoints/v1_user_by_id.php --help
```

## Get user info by username (by ID is faster)

[Open the complete example](endpoints/v1_user_by_username.php) · `GET /v1/user/by/username`

```sh
php examples/endpoints/v1_user_by_username.php --help
```

## Get user info by URL (by ID is faster)

[Open the complete example](endpoints/v1_user_by_url.php) · `GET /v1/user/by/url`

```sh
php examples/endpoints/v1_user_by_url.php --help
```

## Get info about user by ID

[Open the complete example](endpoints/v1_user_about.php) · `GET /v1/user/about`

```sh
php examples/endpoints/v1_user_about.php --help
```

## Get posts (chunked)

[Open the complete example](endpoints/v1_user_medias_chunk.php) · `GET /v1/user/medias/chunk`

```sh
php examples/endpoints/v1_user_medias_chunk.php --help
```

## Get pinned posts

[Open the complete example](endpoints/v1_user_medias_pinned.php) · `GET /v1/user/medias/pinned`

```sh
php examples/endpoints/v1_user_medias_pinned.php --help
```

## Get reels (chunked)

[Open the complete example](endpoints/v1_user_clips_chunk.php) · `GET /v1/user/clips/chunk`

```sh
php examples/endpoints/v1_user_clips_chunk.php --help
```

## Get tagged (mentions) posts

[Open the complete example](endpoints/v1_user_tag_medias_chunk.php) · `GET /v1/user/tag/medias/chunk`

```sh
php examples/endpoints/v1_user_tag_medias_chunk.php --help
```

## Get user stories by ID

[Open the complete example](endpoints/v1_user_stories.php) · `GET /v1/user/stories`

```sh
php examples/endpoints/v1_user_stories.php --help
```

## Get user stories by username (by ID is faster)

[Open the complete example](endpoints/v1_user_stories_by_username.php) · `GET /v1/user/stories/by/username`

```sh
php examples/endpoints/v1_user_stories_by_username.php --help
```

## Get user highlights by ID

[Open the complete example](endpoints/v1_user_highlights.php) · `GET /v1/user/highlights`

```sh
php examples/endpoints/v1_user_highlights.php --help
```

## Get user highlights by username (by ID is faster)

[Open the complete example](endpoints/v1_user_highlights_by_username.php) · `GET /v1/user/highlights/by/username`

```sh
php examples/endpoints/v1_user_highlights_by_username.php --help
```

## Search in followers list by query (not working for legacy verified accounts)

[Open the complete example](endpoints/v1_user_search_followers.php) · `GET /v1/user/search/followers`

```sh
php examples/endpoints/v1_user_search_followers.php --help
```

## Search in followings list by query (not working for legacy verified accounts)

[Open the complete example](endpoints/v1_user_search_following.php) · `GET /v1/user/search/following`

```sh
php examples/endpoints/v1_user_search_following.php --help
```

## Get user following (chunked)

[Open the complete example](endpoints/v1_user_following_chunk.php) · `GET /v1/user/following/chunk`

```sh
php examples/endpoints/v1_user_following_chunk.php --help
```

## Get user followers (chunked)

[Open the complete example](endpoints/v1_user_followers_chunk.php) · `GET /v1/user/followers/chunk`

```sh
php examples/endpoints/v1_user_followers_chunk.php --help
```

## Get media info by ID

[Open the complete example](endpoints/v1_media_by_id.php) · `GET /v1/media/by/id`

```sh
php examples/endpoints/v1_media_by_id.php --help
```

## Get media info by shortcode

[Open the complete example](endpoints/v1_media_by_code.php) · `GET /v1/media/by/code`

```sh
php examples/endpoints/v1_media_by_code.php --help
```

## Get media info by URL

[Open the complete example](endpoints/v1_media_by_url.php) · `GET /v1/media/by/url`

```sh
php examples/endpoints/v1_media_by_url.php --help
```

## Get media insights

[Open the complete example](endpoints/v1_media_insight.php) · `GET /v1/media/insight`

```sh
php examples/endpoints/v1_media_insight.php --help
```

## Get media comments (chunked)

[Open the complete example](endpoints/v1_media_comments_chunk.php) · `GET /v1/media/comments/chunk`

```sh
php examples/endpoints/v1_media_comments_chunk.php --help
```

## Get media likers

[Open the complete example](endpoints/v1_media_likers.php) · `GET /v1/media/likers`

```sh
php examples/endpoints/v1_media_likers.php --help
```

## Get author of the media

[Open the complete example](endpoints/v1_media_user.php) · `GET /v1/media/user`

```sh
php examples/endpoints/v1_media_user.php --help
```

## Get media oEmbed data

[Open the complete example](endpoints/v1_media_oembed.php) · `GET /v1/media/oembed`

```sh
php examples/endpoints/v1_media_oembed.php --help
```

## Get media code from media ID (PK) (unlimited usage)

[Open the complete example](endpoints/v1_media_code_from_pk.php) · `GET /v1/media/code/from/pk`

```sh
php examples/endpoints/v1_media_code_from_pk.php --help
```

## Get media ID (PK) from shortcode (unlimited usage)

[Open the complete example](endpoints/v1_media_pk_from_code.php) · `GET /v1/media/pk/from/code`

```sh
php examples/endpoints/v1_media_pk_from_code.php --help
```

## Get media ID (PK) from URL (unlimited usage)

[Open the complete example](endpoints/v1_media_pk_from_url.php) · `GET /v1/media/pk/from/url`

```sh
php examples/endpoints/v1_media_pk_from_url.php --help
```

## Get story by ID

[Open the complete example](endpoints/v1_story_by_id.php) · `GET /v1/story/by/id`

```sh
php examples/endpoints/v1_story_by_id.php --help
```

## Get story by URL

[Open the complete example](endpoints/v1_story_by_url.php) · `GET /v1/story/by/url`

```sh
php examples/endpoints/v1_story_by_url.php --help
```

## Download story by ID

[Open the complete example](endpoints/v1_story_download.php) · `GET /v1/story/download`

```sh
php examples/endpoints/v1_story_download.php --help
```

## Download story by direct media URL (unlimited usage)

[Open the complete example](endpoints/v1_story_download_by_url.php) · `GET /v1/story/download/by/url`

```sh
php examples/endpoints/v1_story_download_by_url.php --help
```

## Download story file by story URL (IG story link)

[Open the complete example](endpoints/v1_story_download_by_story_url.php) · `GET /v1/story/download/by/story/url`

```sh
php examples/endpoints/v1_story_download_by_story_url.php --help
```

## Get highlight by ID

[Open the complete example](endpoints/v1_highlight_by_id.php) · `GET /v1/highlight/by/id`

```sh
php examples/endpoints/v1_highlight_by_id.php --help
```

## Get highlight by URL

[Open the complete example](endpoints/v1_highlight_by_url.php) · `GET /v1/highlight/by/url`

```sh
php examples/endpoints/v1_highlight_by_url.php --help
```

## Get location by ID

[Open the complete example](endpoints/v1_location_by_id.php) · `GET /v1/location/by/id`

```sh
php examples/endpoints/v1_location_by_id.php --help
```

## Get location top medias

[Open the complete example](endpoints/v1_location_medias_top.php) · `GET /v1/location/medias/top`

```sh
php examples/endpoints/v1_location_medias_top.php --help
```

## Get location recent medias

[Open the complete example](endpoints/v1_location_medias_recent.php) · `GET /v1/location/medias/recent`

```sh
php examples/endpoints/v1_location_medias_recent.php --help
```

## Get location top medias (chunked)

[Open the complete example](endpoints/v1_location_medias_top_chunk.php) · `GET /v1/location/medias/top/chunk`

```sh
php examples/endpoints/v1_location_medias_top_chunk.php --help
```

## Get location recent medias (chunked)

[Open the complete example](endpoints/v1_location_medias_recent_chunk.php) · `GET /v1/location/medias/recent/chunk`

```sh
php examples/endpoints/v1_location_medias_recent_chunk.php --help
```

## Search locations

[Open the complete example](endpoints/v1_location_search.php) · `GET /v1/location/search`

```sh
php examples/endpoints/v1_location_search.php --help
```

## Get hashtag by name

[Open the complete example](endpoints/v1_hashtag_by_name.php) · `GET /v1/hashtag/by/name`

```sh
php examples/endpoints/v1_hashtag_by_name.php --help
```

## Get hashtag top medias

[Open the complete example](endpoints/v1_hashtag_medias_top.php) · `GET /v1/hashtag/medias/top`

```sh
php examples/endpoints/v1_hashtag_medias_top.php --help
```

## Get hashtag top medias (chunked)

[Open the complete example](endpoints/v1_hashtag_medias_top_chunk.php) · `GET /v1/hashtag/medias/top/chunk`

```sh
php examples/endpoints/v1_hashtag_medias_top_chunk.php --help
```

## Get hashtag recent medias (chunked)

[Open the complete example](endpoints/v1_hashtag_medias_top_recent_chunk.php) · `GET /v1/hashtag/medias/top/recent/chunk`

```sh
php examples/endpoints/v1_hashtag_medias_top_recent_chunk.php --help
```

## Get hashtag clips (chunked)

[Open the complete example](endpoints/v1_hashtag_medias_clips_chunk.php) · `GET /v1/hashtag/medias/clips/chunk`

```sh
php examples/endpoints/v1_hashtag_medias_clips_chunk.php --help
```

## Search hashtags

[Open the complete example](endpoints/v1_search_hashtags.php) · `GET /v1/search/hashtags`

```sh
php examples/endpoints/v1_search_hashtags.php --help
```

## Search users

[Open the complete example](endpoints/v1_search_users.php) · `GET /v1/search/users`

```sh
php examples/endpoints/v1_search_users.php --help
```

## Search music

[Open the complete example](endpoints/v1_search_music.php) · `GET /v1/search/music`

```sh
php examples/endpoints/v1_search_music.php --help
```

## Search places

[Open the complete example](endpoints/v1_fbsearch_places.php) · `GET /v1/fbsearch/places`

```sh
php examples/endpoints/v1_fbsearch_places.php --help
```

## Top search

[Open the complete example](endpoints/v1_fbsearch_topsearch.php) · `GET /v1/fbsearch/topsearch`

```sh
php examples/endpoints/v1_fbsearch_topsearch.php --help
```

## Get user info by ID

[Open the complete example](endpoints/v2_user_by_id.php) · `GET /v2/user/by/id`

```sh
php examples/endpoints/v2_user_by_id.php --help
```

## Get user info by username

[Open the complete example](endpoints/v2_user_by_username.php) · `GET /v2/user/by/username`

```sh
php examples/endpoints/v2_user_by_username.php --help
```

## Get user info stream by ID

[Open the complete example](endpoints/v2_userstream_by_id.php) · `GET /v2/userstream/by/id`

```sh
php examples/endpoints/v2_userstream_by_id.php --help
```

## Get user info stream by username

[Open the complete example](endpoints/v2_userstream_by_username.php) · `GET /v2/userstream/by/username`

```sh
php examples/endpoints/v2_userstream_by_username.php --help
```

## Get user stories by ID

[Open the complete example](endpoints/v2_user_stories.php) · `GET /v2/user/stories`

```sh
php examples/endpoints/v2_user_stories.php --help
```

## Get user stories by username

[Open the complete example](endpoints/v2_user_stories_by_username.php) · `GET /v2/user/stories/by/username`

```sh
php examples/endpoints/v2_user_stories_by_username.php --help
```

## Get user reels by ID

[Open the complete example](endpoints/v2_user_clips.php) · `GET /v2/user/clips`

```sh
php examples/endpoints/v2_user_clips.php --help
```

## Get user following list

[Open the complete example](endpoints/v2_user_following.php) · `GET /v2/user/following`

```sh
php examples/endpoints/v2_user_following.php --help
```

## Get user followers list

[Open the complete example](endpoints/v2_user_followers.php) · `GET /v2/user/followers`

```sh
php examples/endpoints/v2_user_followers.php --help
```

## Get media where user is tagged

[Open the complete example](endpoints/v2_user_tag_medias.php) · `GET /v2/user/tag/medias`

```sh
php examples/endpoints/v2_user_tag_medias.php --help
```

## Get user highlights by ID

[Open the complete example](endpoints/v2_user_highlights.php) · `GET /v2/user/highlights`

```sh
php examples/endpoints/v2_user_highlights.php --help
```

## Get user highlights by username (by ID is faster)

[Open the complete example](endpoints/v2_user_highlights_by_username.php) · `GET /v2/user/highlights/by/username`

```sh
php examples/endpoints/v2_user_highlights_by_username.php --help
```

## Get business suggestions for user

[Open the complete example](endpoints/v2_user_explore_businesses_by_id.php) · `GET /v2/user/explore/businesses/by/id`

```sh
php examples/endpoints/v2_user_explore_businesses_by_id.php --help
```

## Get suggested profiles for user

[Open the complete example](endpoints/v2_user_suggested_profiles.php) · `GET /v2/user/suggested/profiles`

```sh
php examples/endpoints/v2_user_suggested_profiles.php --help
```

## Get media info by ID

[Open the complete example](endpoints/v2_media_info_by_id.php) · `GET /v2/media/info/by/id`

```sh
php examples/endpoints/v2_media_info_by_id.php --help
```

## Get media info by shortcode

[Open the complete example](endpoints/v2_media_info_by_code.php) · `GET /v2/media/info/by/code`

```sh
php examples/endpoints/v2_media_info_by_code.php --help
```

## Get media info by URL

[Open the complete example](endpoints/v2_media_info_by_url.php) · `GET /v2/media/info/by/url`

```sh
php examples/endpoints/v2_media_info_by_url.php --help
```

## Get media comments

[Open the complete example](endpoints/v2_media_comments.php) · `GET /v2/media/comments`

```sh
php examples/endpoints/v2_media_comments.php --help
```

## Get media likers

[Open the complete example](endpoints/v2_media_likers.php) · `GET /v2/media/likers`

```sh
php examples/endpoints/v2_media_likers.php --help
```

## Check comment for offensiveness

[Open the complete example](endpoints/v2_media_comment_offensive.php) · `GET /v2/media/comment/offensive`

```sh
php examples/endpoints/v2_media_comment_offensive.php --help
```

## Get comment replies

[Open the complete example](endpoints/v2_media_comments_replies.php) · `GET /v2/media/comments/replies`

```sh
php examples/endpoints/v2_media_comments_replies.php --help
```

## Get story by ID

[Open the complete example](endpoints/v2_story_by_id.php) · `GET /v2/story/by/id`

```sh
php examples/endpoints/v2_story_by_id.php --help
```

## Get music feed by canonical ID

[Open the complete example](endpoints/v2_track_by_canonical_id.php) · `GET /v2/track/by/canonical/id`

```sh
php examples/endpoints/v2_track_by_canonical_id.php --help
```

## Get music feed by ID

[Open the complete example](endpoints/v2_track_by_id.php) · `GET /v2/track/by/id`

```sh
php examples/endpoints/v2_track_by_id.php --help
```

## Get hashtag by name

[Open the complete example](endpoints/v2_hashtag_by_name.php) · `GET /v2/hashtag/by/name`

```sh
php examples/endpoints/v2_hashtag_by_name.php --help
```

## Get hashtag top medias

[Open the complete example](endpoints/v2_hashtag_medias_top.php) · `GET /v2/hashtag/medias/top`

```sh
php examples/endpoints/v2_hashtag_medias_top.php --help
```

## Get hashtag recent medias

[Open the complete example](endpoints/v2_hashtag_medias_recent.php) · `GET /v2/hashtag/medias/recent`

```sh
php examples/endpoints/v2_hashtag_medias_recent.php --help
```

## Get highlight by ID

[Open the complete example](endpoints/v2_highlight_by_id.php) · `GET /v2/highlight/by/id`

```sh
php examples/endpoints/v2_highlight_by_id.php --help
```

## Search hashtags

[Open the complete example](endpoints/v2_search_hashtags.php) · `GET /v2/search/hashtags`

```sh
php examples/endpoints/v2_search_hashtags.php --help
```

## Search music

[Open the complete example](endpoints/v2_search_music.php) · `GET /v2/search/music`

```sh
php examples/endpoints/v2_search_music.php --help
```

## Search accounts (users)

[Open the complete example](endpoints/v2_fbsearch_accounts.php) · `GET /v2/fbsearch/accounts`

```sh
php examples/endpoints/v2_fbsearch_accounts.php --help
```

## Search places (locations)

[Open the complete example](endpoints/v2_fbsearch_places.php) · `GET /v2/fbsearch/places`

```sh
php examples/endpoints/v2_fbsearch_places.php --help
```

## Top search

[Open the complete example](endpoints/v2_fbsearch_topsearch.php) · `GET /v2/fbsearch/topsearch`

```sh
php examples/endpoints/v2_fbsearch_topsearch.php --help
```

## Search reels (clips)

[Open the complete example](endpoints/v2_fbsearch_reels.php) · `GET /v2/fbsearch/reels`

```sh
php examples/endpoints/v2_fbsearch_reels.php --help
```

## Get comments list by media ID (chunked)

[Open the complete example](endpoints/gql_comments_chunk.php) · `GET /gql/comments/chunk`

```sh
php examples/endpoints/gql_comments_chunk.php --help
```

## Get threaded replies list by comment ID (chunked)

[Open the complete example](endpoints/gql_comments_threaded_chunk.php) · `GET /gql/comments/threaded/chunk`

```sh
php examples/endpoints/gql_comments_threaded_chunk.php --help
```

## Get comment likers list by comment ID (chunked)

[Open the complete example](endpoints/gql_comment_likers_chunk.php) · `GET /gql/comment/likers/chunk`

```sh
php examples/endpoints/gql_comment_likers_chunk.php --help
```

## Search top content by keyword

[Open the complete example](endpoints/gql_topsearch.php) · `GET /gql/topsearch`

```sh
php examples/endpoints/gql_topsearch.php --help
```

## Get media likers by media ID

[Open the complete example](endpoints/gql_media_likers.php) · `GET /gql/media/likers`

```sh
php examples/endpoints/gql_media_likers.php --help
```

## Get video usertags by media IDs

[Open the complete example](endpoints/gql_media_usertags.php) · `GET /gql/media/usertags`

```sh
php examples/endpoints/gql_media_usertags.php --help
```

## Get user followers (chunked)

[Open the complete example](endpoints/gql_user_followers_chunk.php) · `GET /gql/user/followers/chunk`

```sh
php examples/endpoints/gql_user_followers_chunk.php --help
```

## Get user following (chunked)

[Open the complete example](endpoints/gql_user_following_chunk.php) · `GET /gql/user/following/chunk`

```sh
php examples/endpoints/gql_user_following_chunk.php --help
```

## Get user reposts

[Open the complete example](endpoints/gql_user_reposts.php) · `GET /gql/user/reposts`

```sh
php examples/endpoints/gql_user_reposts.php --help
```

## Get user clips (reels)

[Open the complete example](endpoints/gql_user_clips.php) · `GET /gql/user/clips`

```sh
php examples/endpoints/gql_user_clips.php --help
```

## Get user profile media (grid)

[Open the complete example](endpoints/gql_user_medias.php) · `GET /gql/user/medias`

```sh
php examples/endpoints/gql_user_medias.php --help
```

## Search users

[Open the complete example](endpoints/v3_fbsearch_accounts.php) · `GET /v3/fbsearch/accounts`

```sh
php examples/endpoints/v3_fbsearch_accounts.php --help
```

## Search places (locations)

[Open the complete example](endpoints/v3_fbsearch_places.php) · `GET /v3/fbsearch/places`

```sh
php examples/endpoints/v3_fbsearch_places.php --help
```

