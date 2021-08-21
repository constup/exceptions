<?php

declare(strict_types = 1);

namespace Constup\Exceptions;

use Exception;

abstract class AbstractException extends Exception implements ConstupExceptionInterface
{
    protected int $httpResponseCode;
    protected string $type;
    protected ?string $debugMessage;

    /**
     * @return int
     */
    public function getHttpResponseCode(): int
    {
        return $this->httpResponseCode;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getDebugMessage(): ?string
    {
        return $this->debugMessage;
    }
}
