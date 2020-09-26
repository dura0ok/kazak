@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Документы</h1>
    <a href="{{ route('docs.create') }}" class="create_form_link">Создать документ</a>
    <div class="docs-wrapper">
        @foreach($documents as $document)
        <div class="document">
            <h1>{{ $document->title }} @isset($document->category->title)|| Категория: {{ $document->category->title }} @endisset</h1>
            <a href="{{ asset('storage/'.$document->file) }}" class="download_link" target="_blank">Скачать файл</a>
            <div class="buttons">
                <a href="{{ route('docs.edit', $document) }}" class="yellow_btn">Редактировать</a>
                <form action="{{ route('docs.destroy', $document) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="red_btn">Удалить</button>
                </form>

            </div>
        </div>
        @endforeach
    </div>
@endsection
