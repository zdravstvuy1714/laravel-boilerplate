<?php

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
    ->withExceptions(new ExceptionHandler())
    ->create();
