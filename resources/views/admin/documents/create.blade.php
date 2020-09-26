@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать документ</h1>
    <form action="{{ route('docs.store') }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название">
        <label for="file">Вставьте документ</label>
        <input type="file" name="file" id="file">
        <label for="article">Выберите категорию, если хотите привязать документ к категории</label>
        <select name="category_id">
            <option value="none" selected>Не привязывать</option>
            @foreach($documentsCategory as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        <button class="green_btn">Создать документ</button>
    </form>
@endsection
