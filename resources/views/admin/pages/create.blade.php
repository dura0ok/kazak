@extends("layouts.admin.template")

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
@endpush

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать страницу</h1>
    <form action="{{ route('admin.pages.pages.store') }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название страницы на английском(не больше 100 символов, только английский символы и -)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название">
        <label for="sample">Создайте контент страницы в редакторе ниже</label>
        <textarea id="sample" class="sun-editor-editable sun" name="content"></textarea>
        <input id="uploadUrl" type="hidden" value="{{ route('admin.pages.pages.upload') }}">
        <input id="galleryUrl" type="hidden" value="{{ route('getGallery') }}">
        <button class="green_btn" id="createButton">Создать страницу</button>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endpush
