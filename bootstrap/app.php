<?php

declare(strict_types=1);

use App\Console\ScheduleHandler;
use App\Exceptions\ExceptionHandler;
use App\Http\MiddlewareHandler;
use Illuminate\Foundation\Application;

return Application::configure(dirname(__DIR__))
    ->withRouting(
        api: __DIR__ . '/../routes/api/v1/routes.php',
        health: '/health',
        apiPrefix: '',
    )
    ->withMiddleware(new MiddlewareHandler())
    ->withSchedule(new ScheduleHandler())
    ->withExceptions(new ExceptionHandler())
    ->create();
