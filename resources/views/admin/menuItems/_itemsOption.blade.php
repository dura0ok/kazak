
@foreach ($menu as $menuItem)
    <option value="{{ $menuItem['id'] ?? ''}}"
            @isset ($item->id)
            @if ($item->parent_id == $menuItem['id'])
            selected=""
            @endif
        @endisset
    >
        {{ $delimiter ?? '' }}{{ $menuItem['title'] ?? '' }}
    </option>

    @isset ($menuItem['children'])
        @include('admin.menuItems._itemsOption', [
            'menu' => $menuItem['children'],
            'item' => $item,
            'delimiter' => ' - ' . $delimiter
        ])
    @endisset

@endforeach
