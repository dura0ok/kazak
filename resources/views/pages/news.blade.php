@extends("layouts.base.template")

@section("content")
    <h1 class="page_title" style="text-decoration: none;">Новости</h1>
    <div class="news" class="baguetteBoxFive gallery">
        @foreach($news as $article)
            <div class="article">

                <input type="hidden" name="id" value="{{ $article->id }}">
                <h1>{{ $article->name }} <br>
                    Дата: {{ Carbon\Carbon::parse($article->date)->locale('ru_RU')->isoFormat('LL') }}</h1>

                <a href="{{ asset('storage/'.$article->image) }}">
                    <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->name }}"
                         title="{{ $article->image }}">
                </a>
                <p>{{ Str::limit($article->text, 300, '......') }}</p>
                <a href="{{ route('article', $article->id) }}" class="green_btn">Подробнее</a>
            </div>
        @endforeach
    </div>
@endsection

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/baguetteBox.min.css") }}">
@endpush

@push("scripts")
    <script src="{{ asset("js/baguetteBox.min.js") }}"></script>
    <script async>
        baguetteBox.run('.article', {
            captions: function(element) {
                return element.getElementsByTagName('img')[0].alt;
            }
        });
    </script>

@endpush

