@extends("layouts.admin.template")

@section("content")
    <form action="" class="login_form">
        <h1>Авторизация в админ панель.</h1>
        <input type="text" placeholder="login">
        <input type="password" placeholder="password">
        <button class="green_btn">Авторизоваться</button>
    </form>
@endsection
