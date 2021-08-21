<?php

declare(strict_types = 1);

namespace Constup\Exceptions;

use Throwable;

interface ConstupExceptionInterface extends Throwable
{
    const TYPE_ERROR = 'error';
    const TYPE_FAILED = 'failed';
    const TYPE_UNHANDLED  ='unhandled';

    /**
     * @return int
     */
    public function getHttpResponseCode(): int;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return string|null
     */
    public function getDebugMessage(): ?string;
}
