<?php

declare(strict_types=1);

namespace FriendsOfOuro\Http\Batch;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface as PsrClientInterface;
use Psr\Http\Message\RequestInterface;

interface ClientInterface extends PsrClientInterface
{
    /**
     * @param RequestInterface[] $requests
     *
     * @throws ClientExceptionInterface
     */
    public function sendRequestBatch(array $requests): ResponseBatchInterface;
}
