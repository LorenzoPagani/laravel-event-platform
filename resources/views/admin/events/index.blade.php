@extends('layouts.admin')
@section('content')
    @foreach ($events as $event)
        <h2>{{ $event->name }}</h2>
        @if ($event->tags)
            @foreach ($event->tags as $tag)
                <h5 class="subtitle text-muted">{{ $tag->name }}</h5>
            @endforeach
        @endif
    @endforeach
@endsection
