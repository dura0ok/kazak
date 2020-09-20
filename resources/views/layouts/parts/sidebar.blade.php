<!-- Start sidebar-->
<aside id="sidebar">
    <!-- Start search-block -->
    <div class="search-block">
        <form>
            <input type="search" name="search" placeholder="То, что нужно найти">
            <button>Поиск</button>
        </form>
    </div>
    <!-- End search-block -->
    <!-- Start menu-->
    <ul>
        <li><a href="{{ route('index') }}">Главная</a></li>
        <li><a href="">Новости</a></li>
        <li><a href="/pages/symbolic.html">Символика</a></li>
        <li><a href="{{ route('ataman') }}">Атаман</a></li>
        <li><a href="" class="parent">Войско</a>
            <ul class="submenu">
                <li><a href="/pages/structure.html"><span>›</span>Структура ГКО</a>
                </li>
            </ul>
        </li>
        <li><a href="{{ route("documents") }}">Документы</a></li>
        <li><a href="" class="parent">Казачий уклад</a>
            <ul class="submenu">
                <li><a href="/pages/civil_service.html"><span>›</span>Государственная служба</a>
                </li>
            </ul>
        </li>
        <li><a href="">Казак без веры - Не казак</a></li>
        <li><a href="">Казачество на Дону</a></li>
        <li><a href="">Казачья молодежь</a></li>
        <li><a href="{{ route("contacts") }}">Контакты</a></li>
        <li><a href="/pages/statements.html">Донские Войсковые ведомости</a></li>
        <li><a href="{{ route("networks") }}">Социальные сети</a></li>
    </ul>
    <!-- End menu-->
    <!-- End sidebar-->
</aside>
