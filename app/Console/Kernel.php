<?php

namespace App\Console;

use App\Jobs\UserJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('message:daily')->everyFiveSeconds();
        // $schedule->command('app:check-status-skema')->everyFiveSeconds();
        $schedule->job(new UserJob)->everyFiveSeconds()->appendOutputTo('scheduler.log');
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
