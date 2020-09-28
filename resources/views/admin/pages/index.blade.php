@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Странички</h1>
    <a href="{{ route('admin.pages.pages.create') }}" class="create_form_link">Создать страницу</a>
    <div class="pages-admin-container">
        <div class="pages">
            @foreach($pages as $page)
                <div class="page">
                    <a href="{{ route('admin.pages.pages.show', $page) }}" class="page_title">
                        <span>Ссылка: pages/page/</span>{{ $page->title }}</a>
                    <div class="buttons">
                        <a href="{{ route('admin.pages.pages.edit', $page->id) }}" class="yellow_btn">Редактировать</a>
                        <form action="{{ route('admin.pages.pages.destroy', $page) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="red_btn">Удалить</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
