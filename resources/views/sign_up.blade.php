<x-header></x-header>
<div class="container mt-3">
    <h2 class="text-center text-white">Регистрация</h2>
    <form class="d-flex flex-column gap-3 mt-4 mb-2 form" method="POST" action="/sign_up_validate"
        style="max-width:40%;margin:0 auto">
        @csrf
        <div class="form-group text-white">
            <input type="text" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Введите логин"
                name="login">
            @error('login')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="name" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Введите имя"
                name="name">
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Введите почту"
                name="email">
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control mb-1" placeholder="Введите пароль" name="password">
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control mb-1" aria-describedby="emailHelp"placeholder="Повторите пароль"
                name="confirm_password">
            @error('confirm_password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Зарегистрироваться</button>
    </form>
    <p class="text-white text-center mb-0">Входя в аккаунт или создавая новый, вы соглашаетесь с нашими</p>
    <p class="text-white text-center"><a href="">Правилами и условиями</a> и <a href="">Положением о
            конфиденциальности</a></p>
</div>
</body>
