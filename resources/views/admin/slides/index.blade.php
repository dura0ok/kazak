@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Слайды</h1>
    <a href="{{ route('slides.create') }}" class="create_form_link">Создать слайд</a>
    <div class="slides-container">
       @foreach($slides as $slide)
           <div class="slide">
               <h1>{{ $slide->title }}</h1>
               <img src="{{ asset('storage/'.$slide->image) }}" alt="{{ $slide->title }}">
               <p>{{ $slide->description }}</p>
               @if($slide->article_id != null) <a href="" class="parent">Перейти на родительскую новость</a>@endif
               <div class="buttons">
                   <a href="{{ route('slides.edit', $slide->id) }}" class="yellow_btn">Редактировать</a>
                   <form action="{{ route('slides.destroy', $slide) }}" method="POST">
                       @csrf
                       @method('DELETE')
                       <button class="red_btn">Удалить</button>
                   </form>

               </div>
           </div>
        @endforeach
    </div>
@endsection
