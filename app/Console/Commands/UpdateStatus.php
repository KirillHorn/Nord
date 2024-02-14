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
        $bookings = Booking::where('status_id', '!=', $desiredStatusId)
        ->where('update_at', '<=', Carbon::now())
        ->get();

        foreach ($bookings as $booking) {
        // Логика обновления статуса
        $booking->status_id = $newStatusId;
        $booking->save();
        }
        $this->info('Booking statuses updated successfully.');
        }


}
