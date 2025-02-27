<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

final class RateLimiterServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        RateLimiter::for(name: 'api', callback: static fn(): Limit => config(key: 'api.rate_limiter.enabled')
            ? Limit::perMinute(
                maxAttempts: config(key: 'api.rate_limiter.attempts'),
                decayMinutes: config(key: 'api.rate_limiter.expires'),
            )
            : Limit::none());
    }
}
