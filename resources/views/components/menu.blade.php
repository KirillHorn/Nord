<div>
    <div class="container d-flex mt-5 flex-wrap">
		<div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3">
			<a href="/personal-data" class="text-decoration-none text-black"><img src="/img/personal-data.svg" alt="" class="me-2">Персональные данные</a>
			<hr>
			<a href="/personal-security/{{Auth::user()->id}}" class="text-decoration-none text-black"><img src="/img/personal-security.svg" alt="" class="me-2">Безопаснсть</a>
			<hr>
			<a href="/personal-booking" class="text-decoration-none text-black"><img src="/img/personal-booking.svg" alt="" class="me-2">Моя бронь</a>
			<hr>
            <a href="/personal-objects" class="text-decoration-none text-black"><img src="/img/personal-objects.svg"
                alt="" class="me-2">Мои объекты</a>
			<hr>
            <form action="{{route('delete_account',['id' => Auth::user()->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-decoration-none text-black btn btn-link px-0 py-0"><img src="/img/perosonal-delete-account.svg" alt="" class="me-2">Удалить аккаунт</button>
            </form>
			<hr>
			<a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
			<hr>
		</div>
</div>