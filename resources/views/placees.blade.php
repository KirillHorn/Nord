<x-header></x-header>
{{-- <x-modal/> --}}


<div class="container d-flex flex-wrap gap-3 px-4 mt-3">

    <table class="table table-dark table-striped" style="max-width: 100%">
        <thead>
            <tr>
                <th scope="col" class="text-center">Номер места</th>
                <th scope="col" class="text-center">Тариф</th>
                <th scope="col" class="text-center">Статус</th>
                <th scope="col" class="text-center">Бронировать/Время</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($place as $places)
                <tr>

                    <th class="text-center">{{ $places->number_place }}</th>
                    <td class="text-center">{{ $places->tariff->title_tariff }}/{{ $places->tariff->cost }} руб</td>
                    @if ($places->status == '1')
                        <td class="text-warning text-center">{{ $places->status_place->title }}</td>
                        <td class="text-center"><a href="{{ route('places_id', $places->id) }}" type="button"
                                class="btn btn-warning " data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $places->id }}"
                                data-bs-whatever="@getbootstrap">Забронировать</a></td>
                    @else
                        <td class="text-danger text-center">{{ $places->status_place->title }}</td>
                        <td>
                            <p class=" text-warning text-center">Забронирован до {{ $places->bookings_id->end_time }}
                            </p>
                        </td>
                    @endif

                </tr>

            @empty
            @endforelse
        </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal{{ $places->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <p>Номер места: {{ $places->number_place }}</p>
                        <p>Тариф: {{ $places->tariff->title_tariff }}</p>
                        <p>Цена: {{ $places->tariff->cost }}</p>
                    </div>

                </div>
                <form method="POST" action="/{{ $places->id }}/booking_Create">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Со скольки</label>
                        <input type="time" class="form-control" id="timeInput" name="beginning_time"
                            value="{{ $currentTime->format('H:i') }}">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">До скольки</label>
                        <div class="range">
                            <input type="range" min="1" max="12" value="1" class="range-input" />
                            <div class="value2">0</div>
                        </div>
                    </div>

                    <div class="modal-footer" style="border-top:none;">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Закрыть</button>
                        <button class="btn btn-warning">Забронировать</button>
                    </div>
                </form>
            </div>
            <!-- -->
        </div>
    </div>
</div>

<script>
    let sliderEl = document.querySelectorAll(".range-input")
    const sliderValue = document.querySelectorAll(".value2")
console.log(sliderEl);
    sliderEl.forEach(el => {
        el.addEventListener("change", (event) => {
            console.log(1);
            const tempSliderValue = event.target.value;
            sliderValue.textContent = tempSliderValue;

            const progress = (tempSliderValue / sliderEl.max) * 100;

            sliderEl.style.background =
                `linear-gradient(to right, #f50 ${progress}%, #ccc ${progress}%)`;
        })
    });
</script>

</body>
