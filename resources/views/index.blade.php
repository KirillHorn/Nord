<x-header />
<section class="section_back">
    <div class="container">
        <div class="banner_main d-flex flex-column gap-5 align-self-center">


            <h1 class="display-1 fw-3 fw-semibold ">Компьютерный клуб в Уфе</h1>

            <p>Nord в Уфе - это лучший компьютерный клуб в Уфе, с топовым железом, девайсами и удобным креслами Cougar! Погрузитесь в другую реальность в компьютерном клубе Nord </p>
            <a class="btn btn-warning">Забронировать</a>
        </div>
</section>
<section>
    {{-- <div class="container ">
        <h2 class="info_sait">О нас</h2>
        <div class="d-flex gap-4 info_sait_map flex-wrap">
            <img alt="местоположение" src="/img/map.jpg" class="map">
            <div class="d-flex flex-column align-self-center text_company" style="width: 50%;">
                <p class="fw-semibold   "> Местоположение: <span style="color: #ffc107 ;" class="fw-bold">Комсомольская, 21/2 ​Советский район</span></p>
                <p class="text_company" style="text-align: justify;">
                    <span style="color: #ffc107 ;" class="fw-bold"> Nord в Уфе </span>
                    - это лучший компьютерный клуб в Уфе,
                    с топовым железом, девайсами и удобным креслами Cougar!
                    Погрузитесь в другую реальность в компьютерном клубе Nord!
                </p>
            </div>
        </div>
    </div> --}}
    <h2 class="info_sait text-center">О нас</h2>
    <div class="container d-flex flex-wrap gap-2">

            <div class="text-center" style="width: 40%">
                <img alt="местоположение" src="/img/map.jpg" class="img-thumbnail">
            </div>
            <div class="" style="width: 50%">
                <p class="fw-semibold fs-4"> Местоположение: <span class="fw-bold text-warning fs-5">Комсомольская, 21/2 ​Советский район</span></p>
                <p class="fs-5" style="text-align: justify;">
                    <span class="fw-semibold text-warning"> Nord в Уфе </span>
                    - это лучший компьютерный клуб в Уфе,
                    с топовым железом, девайсами и удобным креслами Cougar!
                    Погрузитесь в другую реальность в компьютерном клубе Nord!
                </p>
            </div>
    </div>
</section>
<section>
    <div class="container">
        <h1 style="margin-left: 80px;">Тарифы</h1>
        <div class="info-block d-flex justify-content-evenly flex-wrap ">
            @foreach ($tariff as $tariffs)
				<div class="info-item">
					<h4 class="info-item__title">{{$tariffs->title_tariff}}</h4>
					<!-- /.info-item__title -->
					<h5 class="info-item__subtitle">Цена: {{$tariffs->cost}} руб/час </h5>
					<!-- /.info-item__subtitle -->
                    <h5 class="info-item__subtitle">Конфигурация: </h5>
                    <p><span class="fw-semibold">Процессор</span> – {{$tariffs->configs->CPU}}</p>
					<p><span class="fw-semibold">Оперативная память</span> – {{$tariffs->configs->RAM}}</p>
					<p><span class="fw-semibold">Видеокарта</span> – {{$tariffs->configs->card}}</p>
					<p><span class="fw-semibold">Монитор</span> - {{$tariffs->configs->monitor}}</p>
					<p><span class="fw-semibold">Клавиатура</span> – {{$tariffs->configs->keyboard}} </p>
					<p><span class="fw-semibold">Мышка</span> – {{$tariffs->configs->mouse}}</p>
					<p><span class="fw-semibold">Наушники</span> – {{$tariffs->configs->headphones}} </p>
				</div>
                @endforeach
			</div>
    </div>
</section>

<x-footer/>
</body>
</html>
