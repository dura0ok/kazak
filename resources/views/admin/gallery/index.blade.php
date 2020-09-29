@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Галлерея</h1>
    <a href="{{ route('gallery.create') }}" class="create_form_link">Создать картинку в галлерее</a>
    <div class="gallery-wrapper">
        @foreach($gallery as $galleryImage)
            <div class="gallery_image">
                <h1>{{ $galleryImage->title }}</h1>
                <img src="{{ asset("storage/".$galleryImage->path) }}" alt="{{ $galleryImage->title }}">
                <div class="buttons">
                    <a href="{{ route('gallery.edit', $galleryImage) }}" class="yellow_btn">Редактировать</a>
                    <form action="{{ route('gallery.destroy', $galleryImage) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="red_btn">Удалить</button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>
@endsection
