<?php

namespace App\Http\Controllers;

use App\Models\configs;
use App\Models\tariffs;
use App\Models\places;
use App\Models\bookings;
use App\Models\statusplases;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() //страница тарифов
    {
        $tafiffs=tariffs::all();
        return view('admin.index', ['tariff' => $tafiffs]);
    }
    public function edit($id) //страница определенного тарифа
    {
        $tariff=tariffs::find($id);
        return view('admin.edit', ['tariff' => $tariff]);
    }
    public function edit_reduct(Request $request, tariffs $id) { //функция добавление тарифа
        $request->validate(
            [
                'title_tariff' => 'required',
                'cost' => 'required|numeric',
                'CPU' => 'required',
                'RAM' => 'required',
                'card' => 'required',
                'monitor' => 'required',
                'keyboard' => 'required',
                'mouse' => 'required',
                'headphones' => 'required',
            ],
            [
                'title_tariff.required' => 'Поле обязательно для заполнения',
                'cost.required' => 'Поле обязательно для заполнения',
                'cost.numeric' => 'Должны быть только числа!',
                'CPU.required' => 'Поле обязательно для заполнения',
                'RAM.required' => 'Поле обязательно для заполнения',
                'card.required' => 'Поле обязательно для заполнения',
                'monitor.required' => 'Поле обязательно для заполнения',
                'keyboard.required' => 'Поле обязательно для заполнения',
                'mouse.required' => 'Поле обязательно для заполнения',
                'headphones.required' => 'Поле обязательно для заполнения',
            ],
        );
        $info=$request->all();
        $config= $id->config_id;
       $id->fill(
        [
            'title_tariff' => $info['title_tariff'],
            'cost' =>  $info['cost'],
        ]
        );
        $id->save();
        $config= $id->config_id;
        $config_all= configs::find($config);
        $config_all->fill([
            'CPU' => $info['CPU'],
            'RAM' => $info['RAM'],
            'card' => $info['card'],
            'monitor' => $info['card'],
            'keyboard' => $info['keyboard'],
            'mouse' => $info['mouse'],
            'headphones' => $info['headphones'],
        ]);
        $config_all->save();

        return redirect()->back()->with('success','Редактирование прошло успешно!');

    }
    public function places() {
        $places = places::all();
        return view('admin.places',[ 'places' => $places]);
    }
    public function edit_places() {
        $tariffs = tariffs::all();
        $status = statusplases::all();
        return view('admin.editplaces',[ 'tariffs' => $tariffs, 'status' => $status]);
    }
    public function edit_places_validate(Request $request) {
        $request->validate([
            'number_place' => "required|numeric",
            'tariff' => "required"
        ], [
            'number_place.required' => 'Это поле должно быть заполнено!',
            'number_place.numeric' => 'Только числовые значения!',
            'tariff.required' => 'Выберите определенный тариф',
        ]);
        $places = $request->all();
        $addPlaces=places::create([
            "number_place" => $places['number_place'],
            "tariff_id" => $places['tariff'],
            "status" => 1,
        ]);

        if ($addPlaces) {
            return redirect()->back()->with("success", "Вы добавили место!");
        } else {
            return redirect()->back()->with("error", "Ошибка при добавлении!");
        }
    }
    public function delete_places( places $id) {
        $id->delete();
        return redirect()->back()->with('error', 'Вы удалили место!');
    }
    public function booking() //страница забронированных мест
    {
        $booking=bookings::all();
        return view('admin.booking', ["booking" => $booking]);
    }

}
