@extends("layouts.admin.template")

@section("content")
    <a href="{{ route('admin.index') }}" class="back_form_link">Вернуться в админку</a>
    <h1 class="section_name">Создать пункт в меню</h1>
    <form action="{{ route('menu.store') }}" class="creation_form" method="POST"
          enctype="multipart/form-data">
        @csrf
        @include("layouts.admin.parts.errors_block")
        <label for="title">Введите краткое название(Не больше 100 символов)</label>
        <input type="text" name="title" id="title" placeholder="Название категории">
        <label for="sort">Сортировочный номер</label>
        <input type="number" name="sort" id="sort" placeholder="Сортировочный номер">
        <label for="parent">Выберите родителя меню</label>
        <select name="parent_id" id="parent">
            <option value="0">-- без родительской категории --</option>
            @include('admin.menuItems._itemsOption', ['menu' => $menu, 'item' => [], 'delimiter' => ''])
        </select>
        <label for="url">Введите ссылку(куда будет ввести пункт меню)</label>
        <input type="text" name="url" id="url" placeholder="Ссылка">
        <label for="is_public">Ссылка идет на внешний урл или нет?</label>
        <input type="checkbox" name="is_url_public" value="true">
        <button class="green_btn">Создать</button>
    </form>
@endsection
