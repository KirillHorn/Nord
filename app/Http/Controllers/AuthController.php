<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function sign_up(){
        return view('sign_up');
    }
    public function sign_up_validate(Request $request)
    {
        $request->validate(
            [
                'login' => 'required',
                'name' => 'required|alpha',
                'email' => 'required|unique:users|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ],
            [
                'email.required' => 'Поле обязательно для заполнения',
                'email.email' => 'Введите email',
                'email.unique' => 'Данный email уже занят',
                'name.required' => 'Поле обязательно для заполнения',
                'name.alpha' => 'Имя должно состоять только из букв',
                'login.required' => 'Поле обязательно для заполнения',
                'password.required' => 'Поле обязательно для заполнения',
                'confirm_password.required' => 'Поле обязательно для заполнения',
            ],
        );
        $userInfo = $request->all();
        $userCreate = User::create([
            'login' => $userInfo['login'],
            'name' => $userInfo['name'],
            'email' => $userInfo['email'],
            'password' => Hash::make($userInfo['password']),
            'id_role' => "2",
        ]);
        if ($userCreate) {
            Auth::login($userCreate);
            return redirect('/')->with('success', 'Вы зарегестрировались');
        } else {
            return redirect()->back()->with('error', 'Ошибка регистрации');
        }
    }

    public function sign_in(){
        return view('sign_in');
    }
    public function sign_in_validate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ], [
            'email.required' => 'Поле обязательно для заполнения',
            'email.email' => 'Введите email правильно',
            'password.required' => 'Поле обязательно для заполнения',
        ]);

        $user_authorization = $request->only("email", "password");

        if (Auth::attempt(["email" => $user_authorization['email'], "password" => $user_authorization['password']])) {
            if (Auth::user()->role == 1) {
                return redirect('/admin/index')->with('success', 'Вы вошли как Администратор');
            } else {
                return redirect('/')->with('success', 'Добро пожаловать');
            }
        } else {
            return redirect('/authorization')->with('error', 'Ошибка авторизации');
        }
    }
    public function sign_out()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
