@extends("layouts.base.template")

@section("content")
    <h1 class="page_title" style="text-decoration: none;">Документы</h1>
    <div class="documents">
        @foreach($documentsGroups as $groupID => $documents)
            <div class="document accord" data-id="{{ $groupID }}">
                <div class="btn-wrapper">
                    <a href="#" class="btn" data-id="{{ $groupID }}"><span>›</span>{{ $categories->find($groupID)->title ?? 'Без категории' }}</a>
                </div>
                <div class="content" data-id="{{ $groupID }}">
                    @foreach($documents as $document)
                    <a href="{{ asset('storage/'.$document->file) }}">{{ $document->title }}</a><br>
                    @endforeach
                </div>
            </div>
            @endforeach
    </div>
@endsection

@push("scripts")
    <script src="{{ asset("js/tab.js") }}"></script>
@endpush
