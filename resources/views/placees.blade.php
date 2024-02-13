<x-header></x-header>
<x-modal/>
    <div class="container d-flex flex-wrap gap-3 px-4 mt-3">

        <table class="table table-dark table-striped" style="max-width: 100%">
            <thead>
                <tr>
                    <th scope="col">Номер места</th>
                    <th scope="col">Тариф</th>
                    <th scope="col">Статус</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($place as $places)
                <tr>
                  
                    <th>{{$places->number_place}}</th>
                    <td>{{$places->tariff->title_tariff}}/{{$places->tariff->cost}} руб</td>
                    @if ($places->status_place->title = 'Свободный')
                    <td class="text-warning">{{$places->status_place->title}}</td>
                    @else
                    <td class="text-danger">{{$places->status_place->title}}</td>
                    @endif
                    <td><a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Забронировать</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
