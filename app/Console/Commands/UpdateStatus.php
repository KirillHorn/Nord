<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\places;
use App\Models\bookings;
use Carbon\Carbon;

use Illuminate\Console\Scheduling\Schedule;


class UpdateStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'booking:update-status';

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
        $time=Carbon::now()->setTimezone('Asia/Yekaterinburg')->format("H:i:s");

        $bookings = bookings::where('end_time', '<=', $time)->get();

        $this->info($bookings);
        foreach ($bookings as $booking) {
            $place_id = $booking->place_id;
            $place = places::find($place_id);
            $place->status = 1;
            $place->save();
        }
        $this->info('Places statuses updated successfully.');
    }


}
