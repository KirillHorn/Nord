<x-header></x-header>
    <div class="container">
        <h2>Пополнить баланс</h2>
        <form id="prof" method="POST" class="m-auto" action="{{route('balance')}}" style="max-width:50%">
            @csrf
            @method('PATCH')
            <div class="form-group text-white">
                <input type="text" class="form-control mb-1" 
                    aria-describedby="emailHelp"placeholder="Введите сумму" name="balance">
                @error('balance')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </form>
        <p class="text-white fs-4 text-center mt-3">Выберите способ пополнения</p>
        <select class="form-select m-auto" aria-label="Default select example" style="max-width: 50%;">
            <option selected>Банковская карта МИР, Visa, MasterCard </option>
            <option>Кошелек qiwi</option>
            <option>СБП</option>
        </select>
        <p class="text-center"><button class="btn btn-warning mt-3" type="submit" form="prof">Пополнить</button></p>
        
    </div>


</body>