@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать картинку(в галлерее)</h1>
    <form action="{{ route('gallery.store') }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название">
        <label for="file">Вставьте картинку</label>
        <input type="file" name="path" id="file">
        <button class="green_btn">Создать картинку в галлерее</button>
    </form>
@endsection
