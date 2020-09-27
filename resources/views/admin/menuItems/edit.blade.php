@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Обновить пункт в меню</h1>
    <form action="{{ route('menu.update', $item) }}" class="creation_form" method="POST"
          enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Название категории" value="{{ $item->title }}">
        <label for="parent">Обновите родителя меню</label>
        <select name="parent_id" id="parent">
            <option value="0" @if($item->parent_id == 0) selected @endif>-- без родительской категории --</option>
            @include('admin.menuItems._itemsOption', ['menu' => $menu, 'item' => $item, 'delimiter' => ''])
        </select>
        <label for="url">Введите(Обновите) ссылку(куда будет ввести пункт меню)</label>
        <input type="text" name="url" id="url" placeholder="Ссылка" value="{{ $item->url }}">
        <label for="is_public">Ссылка идет на внешний урл или нет?</label>
        <input type="checkbox" name="is_url_public" value="true" @if($item->is_url_public)checked @endif>
        <button class="green_btn">Обновить</button>
    </form>
@endsection
