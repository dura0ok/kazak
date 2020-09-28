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
        @include("layouts.base.parts._items", ['menu' => $menu])
    </ul>
    <!-- End menu-->
    <!-- End sidebar-->
</aside>
