@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Странички</h1>
    <a href="{{ route('admin.pages.pages.create') }}" class="create_form_link">Создать страницу</a>
    <div class="pages-admin-container">
            <div class="page-full">
                <h1>{{ $page->title }}</h1>
                <div class="content">
                    {!! $page->content !!}
                </div>
            </div>
    </div>
@endsection
