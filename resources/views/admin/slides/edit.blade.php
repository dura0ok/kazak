@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Редактировать слайд</h1>
    <form action="{{ route('slides.update', $slide) }}" class="creation_form" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите/Обновите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Краткое название" value="{{ $slide->title }}">
        <label for="description">Описание слайда(Не больше 250 символов)</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $slide->description }}</textarea>
        <label for="file">Вставьте(если нало обновить) картинку слайда</label>
        <input type="file" name="image" id="file">
        <label for="article">Выберите новость, если хотите привязать слайд к новости(кнопка подробнее)</label>
        <select name="article_id" id="article">
            <option value="none" @if($slide->article_id == null) selected @endif>Не привязывать</option>
            @foreach($news as $article)
                @if($article->id == $slide->article_id)
                    <option selected value="{{ $article->id }}">{{ $article->name }}</option>
                @else
                    <option value="{{ $article->id }}">{{ $article->name }}</option>
                @endif
            @endforeach
        </select>
        <button class="green_btn">Создать слайд</button>
    </form>
@endsection
