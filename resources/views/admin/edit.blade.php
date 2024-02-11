<x-links></x-links>
<x-alerts></x-alerts>
<div class="container">
    <h2 class="text-center text-white">Изменить тариф</h2>
    <form class="d-flex flex-column gap-3 mt-4 mb-2" method="POST" action=""
        style="max-width:40%;margin:0 auto">
        @csrf
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Название тарифа"
                name="title_tariff">
            @error('title_tariff')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Введите цену тарифа"
                name="cost">
            @error('cost')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Количество мест"
                name="number_place">
            @error('number_place')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="CPU"
                name="CPU">
            @error('CPU')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="RAM"
                name="RAM">
            @error('RAM')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Видеокарта"
                name="card">
            @error('card')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Монитор"
                name="monitor">
            @error('monitor')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Клавиатура"
                name="keyboard">
            @error('keyboard')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Мышка"
                name="mouse">
            @error('mouse')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Наушники"
                name="headphones">
            @error('headphones')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Изменить тариф</button>
    </form>
</div>
</body>
