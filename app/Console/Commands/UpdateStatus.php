<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\places;
use App\Models\bookings;
use Carbon\Carbon;


class UpdateStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'places:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $newStatusId =1;
        $places = places::where('status', '!=', $desiredStatusId)
        ->where('update_at', '<=', Carbon::now())
        ->get();

        foreach ($places as $placess) {
        // Логика обновления статуса
        $newStatusId=1;
        $placess->status = $newStatusId;
        $placess->save();
        }
        $this->info('Booking statuses updated successfully.');
        }


}
