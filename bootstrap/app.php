<?php

declare(strict_types=1);

use App\Console\ScheduleHandler;
use App\Exceptions\ExceptionHandler;
use App\Http\MiddlewareHandler;
use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__))
    ->withMiddleware(new MiddlewareHandler())
    ->withExceptions(new ExceptionHandler())
    ->withSchedule(new ScheduleHandler())
    ->withRouting(web: __DIR__ . '/../routes/web.php', api: __DIR__ . '/../routes/api.php', apiPrefix: 'api')
    ->create();
