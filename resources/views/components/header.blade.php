<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nord</title>
    <x-alerts></x-alerts>
    <x-links></x-links>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fs-2">
          <img alt="" src="/img/Nord1.png" style="width:150px; height:90px; margin-right: 10px ;"> 
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Фото</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Цены</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Контакты</a></li>
          @auth
            <li><a href="#" class="nav-link px-2 text-white">Забронировать</a></li>
            <li><a href="/add_money" class="nav-link text-warning">Баланс: 200р</a></li>
          @endauth
        </ul>
        <div class="text-end">
          @guest
          <a href="/sign_in" role="button" class="btn btn-outline-light me-2">Войти</a>
          <a href="/sign_up" role="button" class="btn btn-warning">Регистрация</a>     
          @endguest
          @auth
          {{-- <a href="/personal_data" class="text-decoration-none text-white">Баланс: 200р</a> --}}
          <a href="/personal_data" role="button" class="btn btn-outline-light me-2">Личный кабинет</a>
          <a href="/sign_out" role="button" class="btn btn-warning">Выход</a>
          @endauth
        </div>
      </div>
      <hr class="mt-2">
    </div>
</header>

