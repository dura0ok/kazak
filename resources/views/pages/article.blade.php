@extends("layouts.base.template")

@section("content")
    <div class="article">

        <input type="hidden" name="id" value="{{ $article->id }}">
        <h1>{{ $article->name }} |
            Дата: {{ Carbon\Carbon::parse($article->date)->locale('ru_RU')->isoFormat('LL') }}</h1>
        <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->name }}"
             title="{{ $article->image }}">
        <p>{{ $article->text }}</p>
        <a href="" class="green_btn">Подробнее</a>


        @if(!$article->additionalImages->isEmpty())
            <div class="attachments">
                <h1>Вложения(дополнительные картинки)</h1>
                @foreach($article->additionalImages as $image)
                    <img src="{{ asset('storage/'.$image->name) }}" class="attachment" alt="{{ $article->name }}">
                @endforeach
            </div>
        @endif
    </div>
@endsection

