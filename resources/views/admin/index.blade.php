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
        <div class="table-responsive" style="width: 80%">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Название тарифа</th>
                        <th scope="col">Конфигурация пк</th>
                        <th scope="col">Количество мест</th>
                        <th scope="col">Стоимость/час</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tariff as $tariffs)
                        <tr>
                            <td>{{ $tariffs->title_tariff }}</td>
                            <td>{{ $tariffs->config_id }}</td>
                            <td>Otto</td>
                            <td>{{ $tariffs->cost }}</td>
                            <td><a href="/admin/{{ $tariffs->id }}/edit" class="btn btn-warning">Изменить</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
