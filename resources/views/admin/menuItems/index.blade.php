@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Меню</h1>
    <a href="{{ route('menu.create') }}" class="create_form_link">Создать пункт в меню</a>
    <div class="menu_admin_container">
        @foreach($menu as $item)
        <div class="item">
            <h5>#{{ $item->id }} Сортировочный номер: {{ $item->sort }}</h5>
            <a href="@if($item->is_url_public == 1) {{trim($item->url)}} @else {{url(trim($item->url))}} @endif" class="url_title">{{ $item->title }}</a>
            @if($item->parent_id != 0)
            <h6>ID родителя: {{ $item->parent_id }}</h6>
            @endif

            <div class="buttons">
                <a href="{{ route('menu.edit', $item->id) }}" class="yellow_btn">Редактировать</a>
                <form action="{{ route('menu.destroy', $item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="red_btn">Удалить</button>
                </form>

            </div>
        </div>
        @endforeach
    </div>
@endsection
