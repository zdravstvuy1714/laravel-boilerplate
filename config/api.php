<?php

declare(strict_types=1);

return [
    'rate_limiter' => [
        'enabled' => env('API_RATE_LIMITER_ENABLED', true),
        'attempts' => (int) env('API_RATE_LIMITER_ATTEMPTS_PER_MIN', 60),
        'expires' => (int) env('API_RATE_LIMITER_EXPIRES_IN_MIN', 1),
    ],
];
