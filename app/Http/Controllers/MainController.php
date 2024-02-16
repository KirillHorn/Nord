<?php

namespace App\Http\Controllers;

use App\Models\places;
use App\Models\bookings;
use App\Models\tariffs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $tariffs = tariffs::all();
        return view('index', ['tariff' => $tariffs]);
    }
    public function bookingpersonal()
    {
        $author=Auth::user()->id;
        $booking=bookings::where('user_id' ,$author )->get();
        return view('/bookingpersonal', ['booking' => $booking]);
    }

    public function add_money()
    {
        return view('/add_money');
    }


    public function placees_view(){ 
        $currentTime = now()->setTimezone('Asia/Yekaterinburg');;

        $places = places::with('bookings_id')->get();
        return view('placees', ['place' => $places, 'currentTime' => $currentTime ]);
    }

    public function balance(Request $request)
    {
        Auth::user()->balance += $request['balance'];
        Auth::user()->save();
        return redirect('/')->with('success', 'Вы пополнили баланс');
    }

    public function booking_Create($id, Request $request) {

    //     $balance = Auth::user()->balance;
    //     $tariff=places::find($id);
    //     $cost=tariffs::find($tariff);
    //    $costTariff=$cost->cost;
     

        dd($costTariff);
        $time=$request->all();
        $booking = bookings::create([
            "place_id" => $id,
            "beginning_time" =>  $time['beginning_time'],
            "end_time" =>  $time['end_time'],
            "status_id" => 1,
            "user_id" => Auth::user()->id,
        ]);

     
        // $cost=places::find($)
            $summ = $balance - places::find(tariff_id);
        if ($booking) {
            $places=places::find($booking->place_id);
           $places-> fill([
            'status' => 2,
           ]);
           $places-> save();
        }

        if ($booking) {
            return redirect()->back()->with('success', 'Вы забронировали место!');
        } else {
            return redirect()->back()->with('error', 'Бронирование не удалось!');
        }

    }
}
