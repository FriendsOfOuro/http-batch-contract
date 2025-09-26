<?php

declare(strict_types=1);

namespace FriendsOfOuro\Http\Batch;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

interface ResponseBatchInterface extends \Countable
{
    /**
     * @return BatchItemInterface[]
     */
    public function getResults(): array;

    public function isCompleteSuccess(): bool;

    public function hasAnyFailures(): bool;

    public function hasAnySuccesses(): bool;

    /**
     * @return ResponseInterface[]
     */
    public function getResponses(): array;

    /**
     * @return ClientExceptionInterface[]
     */
    public function getExceptions(): array;

    /**
     * @param callable(BatchItemInterface): bool $predicate
     *
     * @return static
     */
    public function filter(callable $predicate): static;
}
