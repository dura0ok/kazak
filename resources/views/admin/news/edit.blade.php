@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Обновить новость</h1>
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <form action="{{ route('news.update', $article->id) }}" method="POST" class="creation_form"
          enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @if($errors->any())
            <div class="errors_wrapper">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="text" name="name" placeholder="Название новости" value="{{ $article->name }}">
        <textarea name="text" placeholder="Введите свой текст">{{ $article->text }}</textarea>
        <label for="mainImage">Вставьте файл главной картинки в поле ниже(если его надо изменить)</label>
        <input type="file" name="mainImage" id="mainImage">
        <label for="additionalImages">Вставьте дополнительные в поле ниже(выберите из своей файловой системы)(старые
            сотрутся, а то что вы прикрепите будут)</label>
        <input type="file" name="additionalImages[]" id="additionalImages" multiple>
        <label for="date">Измените дату(когда произошла новость)</label>
        <input type="date" id="date" name="date" value="{{ $article->date }}">
        <button class="green_btn">Обновить новость</button>
    </form>
@endsection
