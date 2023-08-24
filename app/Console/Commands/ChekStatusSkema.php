<?php

namespace App\Console\Commands;

use App\Models\Skema;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;

class ChekStatusSkema extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-status-skema';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change status by end date';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $skema = Skema::select('id', 'name', 'start_date', 'end_date')->get();
        foreach ($skema as $data) {
            if ($data->status == 0) {
                $update_skema = Skema::findOrFail($data->id);
                $update_skema->status = 1;
                $update_skema->save();
            }
            info($update_skema);
        }
    }
}
