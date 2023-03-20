<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Jusdepixel\InstagramApiLaravel\Jobs\AutoRepostJob;
use Jusdepixel\InstagramApiLaravel\Jobs\RefreshMediaJob;
use Jusdepixel\InstagramApiLaravel\Jobs\RefreshTokenJob;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->job(new RefreshTokenJob)->daily();
        $schedule->job(new RefreshMediaJob)->daily();
        $schedule->job(new AutoRepostJob)->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
