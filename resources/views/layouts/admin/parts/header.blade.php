<header>
    <ul class="menu">
        @empty($user)
            <li style="font-size: 24px;">Авторизация</li>
        @endempty
        @isset($user)
        <li>Привет, {{ $user->name }}</li>
                <li><a href="{{ route('admin.index') }}">Панель</a></li>
        <li><a href="">Выйти</a></li>
        @endisset
    </ul>
</header>
