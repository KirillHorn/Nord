<x-header></x-header>
{{-- <x-modal/> --}}
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
                    <td><a href="{{route('places_id', $places->id)}}" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $places->id}}" data-bs-whatever="@getbootstrap">Забронировать</a></td>
                </tr>
                <div class="modal fade" id="exampleModal{{$places->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" >
                      <div class="modal-content" style="background-color: rgb(33, 37, 41); color:#ffc107;">
                        <div class="modal-header" style="border-bottom:none;">
                          <h5 class="modal-title" id="exampleModalLabel">Бронирование</h5>
                          <button type="button" class="btn-close btn-warning" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                          <div class="mb-3">
                              <div>
                                  <p>Номер места: {{$places->number_place}}</p>
                                  <p>Тариф: {{$places->tariff->title_tariff}}</p>
                                  <p>Цена: {{$places->tariff->cost}}</p>
                              </div>

                          </div>
                          <form method="POST" action="/{{$places->id}}/booking_Create">
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Со скольки</label>
                              <input type="time" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">До скольки</label>
                              <input type="time" class="form-control" id="recipient-name">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer" style="border-top:none;">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                          <button type="button" class="btn btn-warning">Забронироввать</button>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
