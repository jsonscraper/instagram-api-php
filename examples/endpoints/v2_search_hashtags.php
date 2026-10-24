<?php
/**
 * Search hashtags.
 * Endpoint: GET /v2/search/hashtags
 *
 * Run: php examples/endpoints/v2_search_hashtags.php --help
 * Set JSONSCRAPER_INSTAGRAM_LICENSE_KEY. Each run performs one licensed request.
 * Default sample parameters come from the public Postman collection.
 * Replace sample IDs, accounts and URLs with the inputs for your application.
 */
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
$options = getopt('', ['help', 'timeout:', 'output:', 'query:', 'page_token:', 'cache_timeout:']);
if (isset($options['help'])) {
    echo "Search hashtags\nGET /v2/search/hashtags\n\nEnvironment: JSONSCRAPER_INSTAGRAM_LICENSE_KEY\nCommon options: --timeout=30, --help\nQuery options:\n  --query=VALUE  Search query text.\n  --page_token=VALUE  Pagination token. Use the next_page_token from the previous response.\n  --cache_timeout=VALUE  Caching is disabled by default. Set a value greater than 0 to enable response caching for the specified number of seconds; repeated requests within this window will be served from \n\nValues omitted from the command use the public Postman sample defaults. Replace IDs/URLs with your own inputs. Each run makes one request; live requests may consume quota." . PHP_EOL;
    exit(0);
}
require dirname(__DIR__, 2) . '/vendor/autoload.php';
$key = trim((string)getenv('JSONSCRAPER_INSTAGRAM_LICENSE_KEY'));
if ($key === '') {
    fwrite(STDERR, 'Set JSONSCRAPER_INSTAGRAM_LICENSE_KEY before making a licensed request.' . PHP_EOL);
    exit(2);
}
$timeout = (float)($options['timeout'] ?? 30);
if (!is_finite($timeout) || $timeout <= 0) {
    fwrite(STDERR, 'Timeout must be a positive number of seconds.' . PHP_EOL);
    exit(2);
}
$params = ['query'=>'apple', 'page_token'=>null, 'cache_timeout'=>'60'];
foreach ($params as $name => $value) {
    if (array_key_exists($name, $options)) $params[$name] = $options[$name];
}
try {
    $client = new \JsonScraper\Instagram($key, timeout: $timeout);
    $response = $client->v2_search_hashtags($params);
    if (!is_array($response)) {
        if (empty($options['output'])) throw new \RuntimeException('Binary response: provide --output=filename');
        if (file_put_contents($options['output'], $response) === false) throw new \RuntimeException('Could not save response');
        exit(0);
    }
    // HTTP 200 is not sufficient: inspect the application's status and quota.
    if (($response['status'] ?? null) !== 'ok' || !empty($response['rate_limit_reached'])) {
        fwrite(STDERR, 'API application error or quota limit. Inspect the envelope below.' . PHP_EOL);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR) . PHP_EOL;
        exit(1);
    }
    // Preserve IDs as strings and retain unknown upstream fields.
    $json = json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR) . PHP_EOL;
    if (!empty($options['output'])) {
        if (file_put_contents($options['output'], $json) === false) throw new \RuntimeException('Could not save response');
    } else { echo $json; }
} catch (\Throwable $error) {
    // SDK exceptions contain safe messages; do not log request URLs or license keys.
    fwrite(STDERR, get_class($error) . ': ' . $error->getMessage() . PHP_EOL);
    exit(1);
}
