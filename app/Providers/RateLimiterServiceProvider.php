<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

final class RateLimiterServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        RateLimiter::for('api', static fn(): Limit
            => config('api.rate_limiter.enabled')
            ? Limit::perMinute(
                Config::integer('api.rate_limiter.attempts'),
                Config::integer('api.rate_limiter.expires'),
            )
            : Limit::none());
    }
}
