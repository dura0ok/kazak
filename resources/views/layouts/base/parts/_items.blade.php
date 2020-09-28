@foreach($menu as $item)
    @if(!empty($item['descendants']))
        <li><a href="@if($item['is_url_public'] == 1) {{trim($item['url'])}} @else {{url(trim($item['url']))}} @endif" class="parent">{{ $item['title'] }}</a>
            <ul class="submenu">
                @include("layouts.base.parts._items", ['menu' => $item['children']])
            </ul>
        </li>
    @else
        <li><a href="@if($item['is_url_public'] == 1) {{trim($item['url'])}} @else {{url(trim($item['url']))}} @endif">{{ $item['title'] }}</a></li>
    @endif
@endforeach
