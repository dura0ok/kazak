@extends("layouts.base.template")

@section("content")
    <h1 class="page_title" style="text-decoration: none;">Новости</h1>
    <div class="news">
        @foreach($news as $article)
            <div class="article">

                <input type="hidden" name="id" value="{{ $article->id }}">
                <h1>{{ $article->name }} |
                    Дата: {{ Carbon\Carbon::parse($article->date)->locale('ru_RU')->isoFormat('LL') }}</h1>
                <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->name }}"
                     title="{{ $article->image }}">
                <p>{{ Str::limit($article->text, 300, '......') }}</p>
                <a href="{{ route('article', $article->id) }}" class="green_btn">Подробнее</a>
            </div>
        @endforeach
    </div>
@endsection

