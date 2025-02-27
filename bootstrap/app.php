<?php

use App\Exceptions\ExceptionHandler;
use App\Http\MiddlewareHandler;
use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__ . '/../routes/api/v1/routes.php',
        health: '/health',
        apiPrefix: '',
    )
    ->withMiddleware(callback: new MiddlewareHandler())
    ->withExceptions(using: new ExceptionHandler())
    ->create();
