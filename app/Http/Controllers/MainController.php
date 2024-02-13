<?php

namespace App\Http\Controllers;

use App\Models\places;
use App\Models\tariffs;
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
        return view('/bookingpersonal');
    }

    public function add_money()
    {
        return view('/add_money');
    }

    public function balance(Request $request)
    {
        Auth::user()->balance += $request['balance'];
        Auth::user()->save();
        return redirect('/')->with('success', 'Вы пополнили баланс');
    }

    public function placees_view(){
        $places = places::all();
        return view('placees', ['place' => $places]);
    }
}
