<<<<<<< Updated upstream
<x-header />
<section class="section_back container-fluid mt-2">
    <div class="container">
        <div class="banner_main d-flex flex-column gap-5 align-self-center">
            <h1 class="display-1 fw-3 fw-semibold ">Компьютерный клуб в Уфе</h1>
            <p class="fs-3">Nord в Уфе - это лучший компьютерный клуб в Уфе, с топовым железом, девайсами и удобным
                креслами Cougar!
                Погрузитесь в другую реальность в компьютерном клубе Nord </p>
            <a class="btn btn-warning">Забронировать</a>
        </div>
</section>
<section>
    <h2 class="info_sait text-center">О нас</h2>
    <div class="container d-flex flex-wrap gap-2">
        <div class="img-container">
            <img alt="местоположение" src="/img/map.jpg" class="img-fluid">
        </div>
        <div class="text-about">
            <p class="fw-semibold fs-3"> Местоположение: <span class="fw-bold text-warning fs-5">Комсомольская, 21/2
                    ​Советский район</span></p>
            <p class="fs-5" style="text-align: justify;">
                <span class="fw-semibold text-warning"> Nord в Уфе </span>
                - это лучший компьютерный клуб в Уфе,
                с топовым железом, девайсами и удобным креслами Cougar!
                Погрузитесь в другую реальность в компьютерном клубе Nord!
            </p>
        </div>
=======

<x-header/>
        <section  class="section_back">
            <div class="container">
                <div  class="banner_main d-flex flex-column gap-5 align-self-center" >

                 <h1 class="display-1 fw-3 fw-semibold" >Компьютерный клуб в Уфе</h1>

                 <p>Nord в Уфе - это лучший компьютерный клуб в Уфе, с топовым железом, девайсами и удобным креслами Cougar! Погрузитесь в другую реальность в компьютернрм клубе Nord </p>

                 <a>Забронировать</a>



            </div>
        </section>
>>>>>>> Stashed changes
    </div>
</section>
<section style="mt-2">
    <div class="container">
        <h1 class="text-center">Тарифы</h1>
        <div class="info-block d-flex justify-content-evenly flex-wrap ">
            @forelse($tariff as $tariffs)
                <div class="info-item">
                    <h4 class="info-item__title">{{ $tariffs->title_tariff }}</h4>
                    <h5 class="info-item__subtitle">Цена: {{ $tariffs->cost }} руб/час </h5>
                    <h5 class="info-item__subtitle">Конфигурация: </h5>
                    <p><span class="fw-semibold">Процессор</span> – {{ $tariffs->configs->CPU }}</p>
                    <p><span class="fw-semibold">Оперативная память</span> – {{ $tariffs->configs->RAM }}</p>
                    <p><span class="fw-semibold">Видеокарта</span> – {{ $tariffs->configs->card }}</p>
                    <p><span class="fw-semibold">Монитор</span> - {{ $tariffs->configs->monitor }}</p>
                    <p><span class="fw-semibold">Клавиатура</span> – {{ $tariffs->configs->keyboard }} </p>
                    <p><span class="fw-semibold">Мышка</span> – {{ $tariffs->configs->mouse }}</p>
                    <p><span class="fw-semibold">Наушники</span> – {{ $tariffs->configs->headphones }} </p>
                </div>
            @empty
                <div>Тарифов нет</div>
            @endforelse
        </div>
    </div>
</section>
<x-footer />
</body>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
</html>
