@extends('layouts.admin')
@section('content')
    <div class="container p-5">
        <div class="row">
            @foreach ($events as $event)
                <a class="link-info text-decoration-none" href="{{ route('admin.events.show', $event->id) }}">
                    <h2>{{ $event->name }}</h2>

                    @if ($event->tags)
                        @foreach ($event->tags as $tag)
                            <h5 class="subtitle text-muted">{{ $tag->name }}</h5>
                        @endforeach
                    @endif
                </a>
                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="elimina">
                </form>
            @endforeach
        </div>
    </div>
@endsection
