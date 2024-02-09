<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function add_money(){
        return view('/add_money');
    }
}
