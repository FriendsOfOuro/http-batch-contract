<?php

declare(strict_types=1);

namespace FriendsOfOuro\Http\Batch;

use FriendsOfOuro\Http\Batch\Exception\ExceptionUnavailableExceptionInterface;
use FriendsOfOuro\Http\Batch\Exception\ResponseUnavailableExceptionInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface BatchItemInterface
{
    public function getRequest(): RequestInterface;

    public function isSuccess(): bool;

    /**
     * @throws ResponseUnavailableExceptionInterface if the request was not successful
     */
    public function getResponse(): ResponseInterface;

    /**
     * @throws ExceptionUnavailableExceptionInterface if the request was successful
     */
    public function getException(): ClientExceptionInterface;
}
