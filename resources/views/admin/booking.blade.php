<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-links></x-links>
    <x-alerts></x-alerts>
</head>

<body>
    
    <div class="container d-flex flex-wrap gap-3 mt-5">
        <x-admin.menu></x-admin.menu>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Номер места</th>
                        <th scope="col" class="text-center">Время брони</th>
                        <th scope="col" class="text-center">Тариф/цена</th>
                        <th scope="col" class="text-center">Имя клиента</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $booking as $bookings)
                    <tr>
                    <th class="text-center">{{$bookings->place_id}}</th>
                        <td class="text-center">{{ $bookings->beginning_time}} - {{$bookings->end_time}}</td>
                        <td class="text-center">{{$bookings->places->tariff->title_tariff}}/{{$bookings->places->tariff->cost }} рублей</td>
                        <th class="text-center">{{$bookings->users_id->name}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
