<x-header></x-header>
{{-- <x-modal/> --}}


<div class="container d-flex flex-wrap gap-3 px-4 mt-3">
    <div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3 gap-3" style="width:auto;height:20%">
        <a href="{{ route('placees', ['sort_order' => 'asc']) }}" class="text-decoration-none text-white">Сортировка
            Тарифов от А до Я</a>
        <a href="{{ route('placees', ['sort_order' => 'desc']) }}" class="text-decoration-none text-white">Сортировка
            Тарифов от Я до А</a>
    </div>
    <div class="table-responsive" style="width: 100%">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Номер места</th>
                    <th scope="col" class="text-center">Тариф</th>
                    <th scope="col" class="text-center">Статус</th>
                    <th scope="col" class="text-center">Бронировать/Время</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($place as $places)
                    <tr>
                        <th class="text-center">{{ $places->number_place }}</th>
                        <td class="text-center">{{ $places->tariff->title_tariff }}/{{ $places->tariff->cost }} руб</td>
                        @if ($places->status == '1')
                            <td class="text-warning text-center">{{ $places->status_place->title }}</td>
                            <td class="text-center"><button type="button" class="btn btn-warning button_book "
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-bs-whatever="@getbootstrap" data-place="{{ $places->id }}"
                                    data-tariff="{{ $places->tariff->title_tariff }}"
                                    data-cost="{{ $places->tariff->cost }}">Забронировать</button></td>
                        @else
                            <td class="text-danger text-center">{{ $places->status_place->title }}</td>
                            <td>
                                <p class=" text-warning text-center">Забронирован до
                                    {{ $places->bookings_id->end_time }}
                                </p>
                            </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(33, 37, 41); color:#ffc107;">
            <div class="modal-header" style="border-bottom:none;">
                <h5 class="modal-title" id="exampleModalLabel">Бронирование</h5>
                <button type="button" class="btn-close btn-warning" data-bs-dismiss="modal"
                    aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div>
                        <p id="modalplace"></p>
                        <p id="modalTariff"></p>
                        <p id="modalcost"></p>
                    </div>

                </div>
                <form method="POST" action="/booking_Create">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Со скольки</label>
                        <input type="time" class="form-control" id="timeInput" name="beginning_time"
                            value="{{ $currentTime->format('H:i') }}">
                    </div>
                    <input type="hidden" name="place_id" id="modalInputPlace">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">На сколько часов</label>
                        <div class="range" id="rangeContainer">
                            <input type="range" id="rangeInput" min="1" max="12" step="1"
                                value="1" oninput="updateLabel(this.value)" class="range-input" name="end_time" />
                            <div class="value2" id="rangeValue">1</div>
                        </div>
                    </div>

                    <div class="modal-footer" style="border-top:none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button class="btn btn-warning">Забронировать</button>
                    </div>
                </form>
            </div>
            <!-- -->
        </div>
    </div>
</div>



<script>
    var place, tariff, cost;

    function updateLabel(value) {
        document.getElementById("rangeValue").innerText = value;
        document.getElementById("cost").innerHTML = cost * value;

    }
    document.addEventListener("DOMContentLoaded", function() {
        var buttons = document.querySelectorAll(".button_book");
        buttons.forEach(function(button) {
            button.addEventListener("click", function() {
                place = button.dataset.place;
                tariff = button.dataset.tariff;
                cost = button.dataset.cost;

                var placeString = "Место: " + place;
                var tariffString = "Тариф: " + tariff;
                var costString = "Цена: <span id='cost'>" + cost + "</span> ₽";

                document.getElementById("modalplace").innerHTML = placeString;
                document.getElementById("modalTariff").innerHTML = tariffString;
                document.getElementById("modalcost").innerHTML = costString;


                document.getElementById("modalInputPlace").value = place;

                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();
            });
        });
    });
    var result, elements = document.getElementsByTagName('*');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].getAttribute('type') == 'range')
            result = elements[i].value;
    };
</script>

</body>
