@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Главная|(Админское меню)|</h1>
    <ul class="apanel">
        <li><a href="{{ route('index') }}">Вернуться к сайту</a></li>
        <li><a href="{{ route('slides.index') }}">Управление слайдером</a></li>
        <li><a href="{{ route('news.index') }}">Управление новостями</a></li>
        <li><a href="{{ route('statements.index') }}">Управление ведомостями</a></li>
        <li><a href="{{ route('documentCategories.index') }}">Управление категориями документов</a></li>
        <li><a href="{{ route('docs.index') }}">Управление документами</a></li>
        <li><a href="{{ route('menu.index') }}">Управление меню</a></li>
        <li><a href="{{ route('admin.pages.pages.index') }}">Управление страницами</a></li>
        <li><a href="javascript:alert('Данная страница временно недоступна')">Управление галереей</a></li>
    </ul>
@endsection
