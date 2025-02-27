<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Telescope\Console\PruneCommand as TelescopePruneCommand;

final class ScheduleHandler
{
    public function __invoke(Schedule $schedule): void
    {
        $schedule
            ->command(TelescopePruneCommand::class)
            ->daily();
    }
}
