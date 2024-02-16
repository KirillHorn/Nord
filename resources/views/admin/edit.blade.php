<x-header></x-header>
<x-alerts></x-alerts>
<div class="container">
    <h2 class="text-center text-white">Изменить тариф</h2>
    <form class="d-flex flex-column gap-3 mt-4 mb-2 form" method="POST" action="/{{$tariff->id}}/edit_reduct"
        style="max-width:40%;margin:0 auto">
        @csrf
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->title_tariff}}"
                name="title_tariff">
            @error('title_tariff')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->cost}}"
                name="cost">
            @error('cost')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->CPU}}"
                name="CPU">
            @error('CPU')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->RAM}}"
                name="RAM">
            @error('RAM')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->card}}"
                name="card">
            @error('card')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->monitor}}"
                name="monitor">
            @error('monitor')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->keyboard}}"
                name="keyboard">
            @error('keyboard')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->mouse}}"
                name="mouse">
            @error('mouse')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp" value="{{$tariff->configs->headphones}}"
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
