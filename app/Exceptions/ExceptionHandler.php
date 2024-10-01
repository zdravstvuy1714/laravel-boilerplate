<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Foundation\Configuration\Exceptions as ExceptionsConfiguration;

final readonly class ExceptionHandler
{
    public function __invoke(ExceptionsConfiguration $exceptions) {}
}
