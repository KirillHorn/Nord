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
        <div style="width: 80%;">
            <div class="table-responsive" style="width: 80%">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Номер места</th>
                            <th scope="col">Тариф места</th>
                            <th scope="col">Статус места</th>
                            <th scope="col">Удалить место</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $placess)
                            <tr>
                                <td>{{ $placess->number_place }}</td>
                                <td>{{ $placess->tariff->title_tariff }}</td>
                                <td>{{ $placess->status_place->title }}</td>
                                <td><a href="/{{ $placess->id }}/delete_places" class="btn btn-danger">Удалить</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <caption><a href="/admin/editplaces" class=" text-center  btn-warning add_places">Добавить места</a></caption>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
