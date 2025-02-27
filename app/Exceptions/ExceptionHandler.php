<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Http\Request;
use Throwable;

final class ExceptionHandler
{
    public function __invoke(Exceptions $exceptions): void
    {
        $exceptions->shouldRenderJsonWhen(static fn(Request $request, Throwable $e): true => true);
    }
}
