<?php

declare(strict_types=1);

namespace SmitBackend\HybridRAG\Contracts;

/**
 * Interface RerankerInterface
 *
 * @package SmitBackend\HybridRAG
 */
interface RerankerInterface
{
    public function execute(array $payload = []): mixed;
}
