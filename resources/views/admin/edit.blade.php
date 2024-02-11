<x-links></x-links>
<x-alerts></x-alerts>
<div class="container">
    <h2 class="text-center text-white">Изменить тариф</h2>
    <form class="d-flex flex-column gap-3 mt-4 mb-2" method="POST" action="/sign_up_validate"
        style="max-width:40%;margin:0 auto">
        @csrf
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Введите логин"
                name="login">
            @error('login')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Изменить тариф</button>
    </form>
</div>
</body>
