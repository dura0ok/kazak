@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Новости</h1>
    <a href="{{ route('news.create') }}" class="create_form_link">Создать новость</a>
    <div class="news-container">
        @forelse($news as $article)
            <div class="article">
                <input type="hidden" name="id" value="{{ $article->id }}">
                <h1>{{ $article->name }} | Дата: {{ Carbon\Carbon::parse($article->date)->locale('ru_RU')->isoFormat('LL') }}</h1>
                <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->name }}"
                     title="{{ $article->image }}">
                <p>{{ Str::limit($article->text, 300, '......') }}</p>

                @if(!$article->additionalImages->isEmpty())
                    <div class="attachments">
                        <h1>Вложения(дополнительные картинки)</h1>
                        @foreach($article->additionalImages as $image)
                            <img src="{{ asset('storage/'.$image->name) }}" class="attachment" alt="{{ $article->name }}">
                        @endforeach
                    </div>
                @endif
                <div class="buttons">
                    <a href="{{ route('news.edit', $article->id) }}" class="yellow_btn">Редактировать</a>
                    <form action="{{ route('news.destroy', $article) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="red_btn">Удалить</button>
                    </form>

                </div>

            </div>
        @empty
        @endforelse
    </div>
@endsection
