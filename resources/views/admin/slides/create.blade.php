@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать слайд</h1>
    <form action="{{ route('slides.store') }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название">
        <label for="description">Описание слайда(Не больше 250 символов)</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="file">Вставьте картинку слайда</label>
        <input type="file" name="image" id="file">
        <label for="article">Выберите новость, если хотите привязать слайд к новости(кнопка подробнее)</label>
        <select name="article_id" id="article">
            <option value="none" selected>Не привязывать</option>
            @foreach($news as $article)
                <option value="{{ $article->id }}">{{ $article->name }}</option>
            @endforeach
        </select>
        <button class="green_btn">Создать слайд</button>
    </form>
@endsection
