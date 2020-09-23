@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать новость</h1>
    <form action="{{ route('news.store') }}" method="POST" class="creation_form" enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <input type="text" name="name" placeholder="Название новости">
        <textarea name="text" placeholder="Введите свой текст"></textarea>
        <label for="mainImage">Вставьте файл главной картинки в поле ниже</label>
        <input type="file" name="mainImage" id="mainImage">
        <label for="additionalImages">Вставьте дополнительные в поле ниже(выберите из своей файловой системы)</label>
        <input type="file" name="additionalImages[]" id="additionalImages" multiple>
        <label for="date">Введите дату(когда произошла новость)</label>
        <input type="date" id="date" name="date">
        <button class="green_btn">Создать новость</button>
    </form>
@endsection
