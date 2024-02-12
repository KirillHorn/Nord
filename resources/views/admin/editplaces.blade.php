<x-links></x-links>
<x-alerts></x-alerts>
<div class="container">
    <h2 class="text-center text-white">Добавить новое место!</h2>
    <form class="d-flex flex-column gap-3 mt-4 mb-2" method="POST" action="/edit_places_validate"
        style="max-width:40%;margin:0 auto">
        @csrf
        <div class="form-group text-white">
            <label for="floatingInput">Номер места</label>
            <input type="text" class="form-control mb-1"  id="floatingInput"  name="number_place">
            @error('number_place')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group text-white">
            <select class="form-select" aria-label="Default select example" name="tariff">
                <option selected>Выбрать тариф </option>
                @foreach ($tariffs as $tariff )
                <option value="{{$tariff->id}}">{{$tariff->title_tariff}}</option>
                @endforeach
              </select>
            @error('number_place')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>




        <button type="submit" class="btn btn-warning">Добавить новое место</button>
    </form>
</div>
</body>
