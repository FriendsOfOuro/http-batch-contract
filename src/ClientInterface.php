<?php

declare(strict_types=1);

namespace FriendsOfOuro\Http\Batch;

use Psr\Http\Client\ClientInterface as PsrClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface extends PsrClientInterface
{
    /**
     * @param RequestInterface[] $requests
     *
     * @return ResponseInterface[]
     *
     * @throws \Exception
     */
    public function sendRequestBatch(array $requests): array;
}
