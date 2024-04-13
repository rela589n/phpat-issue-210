<?php

declare(strict_types=1);

namespace Rela589n\PhpatIssue210\Handler;

use Rela589n\PhpatIssue210\Handler\Exception\ExceptionalValidationFailedException;
use Throwable;

final class ExceptionalHandler implements ExceptionHandler
{
    /**
     * @template T of Throwable
     *
     * @param T $exception
     *
     * @throws T|ExceptionalValidationFailedException
     */
    public function capture(object $message, Throwable $exception): never
    {
        throw $exception;
    }
}
