@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Создать новость</h1>
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <form action="{{ route('news.store') }}" method="POST" class="creation_form" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
            <div class="errors_wrapper">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="text" name="name" placeholder="Название новости">
        <textarea name="text" placeholder="Введите свой текст"></textarea>
        <label for="mainImage">Вставьте файл главной картинки в поле ниже</label>
        <input type="file" name="mainImage" id="mainImage">
        <label for="additionalImages">Вставьте дополнительные в поле ниже(выберите из своей файловой системы)</label>
        <input type="file" name="additionalImages[]" id="additionalImages" multiple>
        <label for="date">Введите дату(когда произошла новость)</label>
        <input type="date" id="date" name="date">
        <button class="green_btn">Создать новость</button>
    </form>
@endsection
