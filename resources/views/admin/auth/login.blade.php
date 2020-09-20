@extends("layouts.admin.template")

@section("content")
    <form action="{{ route("admin.authenticate") }}" method="POST" class="login_form">
        @csrf
        <h1>Авторизация в админ панель.</h1>
        @if($errors->any())
            <div class="error_block">
                <p>{{$errors->first()}}</p>
            </div>
        @endif
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <button class="green_btn">Авторизоваться</button>
    </form>
@endsection
