@extends("layouts.admin.template")

@section("content")
    <h1 class="section_name">Ведомости</h1>
    <a href="{{ route('statements.create') }}" class="create_form_link">Создать ведомость</a>
    <div class="statements-container">
        @forelse($statements as $statement)
            <div class="statement">
                <h1>{{ $statement->title }}</h1>
                <a href="{{ asset('storage/'.$statement->file) }}" target="_blank">Открыть файл</a>
                <div class="buttons">
                    <a href="{{ route('statements.edit', $statement->id) }}" class="yellow_btn">Редактировать</a>
                    <form action="{{ route('statements.destroy', $statement) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="red_btn">Удалить</button>
                    </form>

                </div>

            </div>
        @empty
        @endforelse
    </div>
@endsection
