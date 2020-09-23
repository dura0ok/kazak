@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Обновить Ведомость</h1>
    <form action="{{ route('statements.update', $statement) }}" class="creation_form" method="POST"
          enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название" value="{{ $statement->title }}">
        <label for="file">Вставьте PDF файл в поле ниже(если хотите обновить)</label>
        <input type="file" name="file" id="file">
        <button class="green_btn">Обновить ведомость</button>
    </form>
@endsection
