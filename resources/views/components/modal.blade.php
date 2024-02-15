<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="background-color: rgb(33, 37, 41); color:#ffc107;">
      <div class="modal-header" style="border-bottom:none;">
        <h5 class="modal-title" id="exampleModalLabel">Бронирование</h5>
        <button type="button" class="btn-close btn-warning" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <div>
                <p>Номер места:</p>
                <p>Тариф:</p>
                <p>Цена:</p>
            </div>

        </div>
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Со скольки</label>
            <input type="date" class="form-control" id="recipient-name" name="beginning_time">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">До скольки</label>
            <input type="date" class="form-control" id="recipient-name" name="end_time">
          </div>
       
      </div>
      <div class="modal-footer" style="border-top:none;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <input type="button" class="btn btn-warning">Забронироввать</button>
        </form>
      </div>
    </div>
  </div>
</div>