<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;

final readonly class ScheduleHandler
{
    public function __invoke(Schedule $schedule): void {}
}
