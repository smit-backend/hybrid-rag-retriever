<?php

declare(strict_types=1);

namespace SmitBackend\HybridRAG;

use SmitBackend\HybridRAG\Contracts\RerankerInterface;

/**
 * Class HybridRetriever
 *
 * @package SmitBackend\HybridRAG
 */
class HybridRetriever implements RerankerInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
