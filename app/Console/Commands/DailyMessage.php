<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DailyMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan command to sends daily messages';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'THIS IS MY FIRST BASIC SCHEDULER';
    }
}
