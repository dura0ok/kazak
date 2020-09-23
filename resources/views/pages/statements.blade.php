@extends("layouts.base.template")

@section("content")
    <h1 class="page_title" style="text-decoration: none;">Донские войсковые ведомости</h1>
    <div class="statements">
        @foreach($statements as $statement)
            <div class="state">
                <div class="btn-wrapper">
                    <a href="#" class="btn"><span>›</span>{{ $statement->title }}</a>
                </div>
                <div class="content">
                    <a
                        href="{{ asset('storage/'.$statement->file) }}">Открыть файл  || {{ $statement->id }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push("scripts")
    <script src="{{ asset("js/tab.js") }}"></script>
@endpush

