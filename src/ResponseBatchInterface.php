<?php

declare(strict_types=1);

namespace FriendsOfOuro\Http\Batch;

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
     * @return BatchItemInterface[]
     */
    public function getSuccessfulResults(): array;

    /**
     * @return BatchItemInterface[]
     */
    public function getFailedResults(): array;

    /**
     * @param callable(BatchItemInterface): bool $predicate
     *
     * @return BatchItemInterface[]
     */
    public function filter(callable $predicate): array;
}
