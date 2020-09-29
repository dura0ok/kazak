@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Обновить картинку(в галлерее)</h1>
    <form action="{{ route('gallery.update', $galleryImage) }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название" value="{{ $galleryImage->title }}">
        <label for="file">Вставьте картинку(новую)</label>
        <input type="file" name="path" id="file">
        <button class="green_btn">Обновить картинку в галлерее</button>
    </form>
@endsection
