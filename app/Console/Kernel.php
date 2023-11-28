<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->daily()->at('00:00')->exec('mv ' . storage_path('logs/laravel.log') . ' ' . storage_path('logs/laravel-' . now()->format('Y-m-d') . '.log'));

        // // Clean up log files older than 7 days
        // $schedule->daily()->at('00:00')->exec('find ' . storage_path('logs') . ' -type f -name "laravel-*.log" -mtime +7 -delete');

    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');

    }


}
