@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать Категорию документа</h1>
    <form action="{{ route('documentCategories.store') }}" class="creation_form" method="POST"
          enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Название категории">
        <button class="green_btn">Создать</button>
    </form>
@endsection
