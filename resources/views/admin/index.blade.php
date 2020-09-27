@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Главная|(Админское меню)|</h1>
    <ul class="apanel">
        <li><a href="{{ route('index') }}">Вернуться к сайту</a></li>
        <li><a href="{{ route('slides.index') }}">Управление слайдером</a></li>
        <li><a href="{{ route('news.index') }}">Управление новостями</a></li>
        <li><a href="{{ route('statements.index') }}">Управление ведомостями</a></li>
        <li><a href="{{ route('documentCategory.index') }}">Управление категориями документов</a></li>
        <li><a href="{{ route('docs.index') }}">Управление документами</a></li>
        <li><a href="">Управление меню</a></li>
        <li><a href="">Управление страницами</a></li>
        <li><a href="">Управление галереей</a></li>
    </ul>
@endsection
