@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Категории документов</h1>
    <a href="{{ route('documentCategories.create') }}" class="create_form_link">Создать категорию документа</a>
    <div class="category_document_wrapper">
        @foreach($documentCategory as $category)
            <div class="documentCategory">
                <h1>{{ $category->title }}</h1>
                <div class="buttons">
                    <a href="{{ route('documentCategories.edit', $category->id) }}" class="yellow_btn">Редактировать</a>
                    <form action="{{ route('documentCategories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="red_btn">Удалить</button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>
@endsection
