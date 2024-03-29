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
        $author = Auth::user()->id;
        $booking = bookings::where('user_id', $author)->paginate(3);
        return view('/bookingpersonal', compact('booking'));
    }
    // ['booking' => $booking]

    public function add_money()
    {
        return view('/add_money');
    }
    public function placees_view(Request $request)
    {
        $sortOrder = $request->get('sort_order');
        $currentTime = now()->setTimezone('Asia/Yekaterinburg');
        // $places = places::with('bookings_id', 'tariff')->join('tariffs', 'tariffs.id', '=', 'tariff_id')->orderBy('title_tariff', $sortOrder)->get();
        if ($sortOrder == 0 ) {
        $places = places::with('bookings_id', 'tariff')->join('tariffs', 'tariffs.id', '=', 'tariff_id')->get();
        }
        else {
        $places = places::with('bookings_id', 'tariff')->join('tariffs', 'tariffs.id', '=', 'tariff_id')->where("tariff_id", $sortOrder)->get();
        }
        return view('placees', ['place' => $places, 'currentTime' => $currentTime]);
    }

    public function balance(Request $request)
    {
        Auth::user()->balance += $request['balance'];
        Auth::user()->save();
        return redirect('/')->with('success', 'Вы пополнили баланс');
    }

    public function booking_Create(Request $request)
    {
        $time = $request->all();
        $timeend = $time['beginning_time']; //со скольки
        $hours = $time['end_time']; //количество часов
        $endTime = date('H:i', strtotime("$hours hour", strtotime($timeend))); //конечное время
        $balance = Auth::user()->balance;
        $tariff = places::find($time['place_id']);
        $tariffCost = tariffs::find($tariff->tariff_id);
        $cost = $tariffCost->cost;
        $costHours = $cost * $hours;
        if ($balance >= $costHours) {
            $finallyCost = $balance - $costHours;
            $user = Auth::user();
            $user->update(['balance' => $finallyCost]);
        } else {
            return redirect()->back()->with('error', 'У вас недостаточно средств!');
        }
        $booking = bookings::create([
            'place_id' => $time['place_id'],
            'beginning_time' => $time['beginning_time'],
            'end_time' => $endTime,
            'status_id' => 1,
            'user_id' => Auth::user()->id,
        ]);
        if ($booking) {
            $places = places::find($booking->place_id);
            $places->fill([
                'status' => 2,
            ]);
            $places->save();
        }
        if ($booking) {
            return redirect()->back()->with('success', 'Вы забронировали место!');
        } else {
            return redirect()->back()->with('error', 'Бронирование не удалось!');
        }
    }
}
