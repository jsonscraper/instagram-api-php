<?php
declare(strict_types=1);
namespace JsonScraper;
final class APIError extends \RuntimeException {
    public function __construct(public readonly int $status, public readonly ?string $retryAfter=null) { parent::__construct("jsonscraper API returned HTTP $status", $status); }
}
