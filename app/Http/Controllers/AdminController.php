<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function tarif()
    {

        return view('admin.tarif');
    }


    public function booking()
    {
        return view('admin.booking');
    }
    public function edit()
    {
        return view('admin.edit');
    }
}
