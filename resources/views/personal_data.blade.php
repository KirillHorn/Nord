<x-header></x-header>
<body>
    <div class="container d-flex flex-wrap gap-3 px-4">
        <x-menu></x-menu>
        <table class="table table-dark " style="max-width: 80%">
			<tbody>
                <tr>
                  <td style="width: 10rem;">Логин</td>
                  <td>{{Auth::user()->login}}</td>
                </tr>
                <tr>
                  <td>Имя</td>
                  <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
                  <td>Почта</td>
                  <td>{{Auth::user()->email}}</td>
                </tr>
              </tbody>
              <caption><a href="" role="button" class="btn btn-primary">Изменить</a></caption>
          </table>
    </div>

</body>