<?php

declare(strict_types=1);

namespace App\Http;

use Illuminate\Foundation\Configuration\Middleware as MiddlewareConfiguration;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Http\Middleware\ValidatePostSize;

final readonly class MiddlewareHandler
{
    public function __invoke(MiddlewareConfiguration $configuration): void
    {
        $configuration->use([
            TrustProxies::class,
            HandleCors::class,
            PreventRequestsDuringMaintenance::class,
            ValidatePostSize::class,
            TrimStrings::class,
            ConvertEmptyStringsToNull::class,
        ]);
    }
}
