

<x-header></x-header>
    <div class="container d-flex flex-wrap gap-3 px-4 mt-3">
        <x-menu></x-menu>
        <table class="table table-dark table-striped" style="max-width: 80%">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Номер места</th>
                    <th scope="col" class="text-center">Время бронирования</th>
                    <th scope="col" class="text-center">Тариф/Стоимость </th>
                    <th scope="col" class="text-center">Дата бронирования </th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $booking as $bookings)
                <tr>
        
                    <th class="text-center">{{$bookings->place_id}}</th>
                    <td class="text-center">{{ $bookings->beginning_time}} - {{$bookings->end_time}}</td>
                    <td class="text-center">{{$bookings->places->tariff->title_tariff}}/{{$bookings->places->tariff->cost }} рублей</td>
                    <td class="text-center">{{$bookings->created_at->format("d-m-Y")}}</td>
              
                </tr>
                @endforeach
            </tbody>
        </table>
       <div class=" d-flex " style="margin-left:70px;"> {{ $booking->withQueryString()->links('pagination::bootstrap-5') }} </div> 
    </div>
</body>
