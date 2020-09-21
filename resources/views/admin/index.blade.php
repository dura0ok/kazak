@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Главная|(Админское меню)|</h1>
    <ul class="apanel">
        <li><a href="{{ route('index') }}">Вернуться к сайту</a></li>
        <li><a href="">Управление слайдером</a></li>
        <li><a href="">Управление новостями</a></li>
        <li><a href="">Управление ведомостями</a></li>
        <li><a href="">Управление документами</a></li>
        <li><a href="">Управление страницами</a></li>
    </ul>
@endsection
