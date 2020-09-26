@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Обновить документ</h1>
    <form action="{{ route('docs.update', $document) }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название" value="{{ $document->title }}">
        <label for="file">Вставьте документ</label>
        <input type="file" name="file" id="file">
        <label for="article">Выберите категорию, если хотите привязать документ к категории</label>
        <select name="category_id">
            <option value="none" @if($document->category_id == null) selected @endif>Не привязывать</option>
            @foreach($documentsCategory as $category)
                @if($category->id == $document->category_id)
                    <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endif
            @endforeach
        </select>
        <button class="green_btn">Обновить документ</button>
    </form>
@endsection
