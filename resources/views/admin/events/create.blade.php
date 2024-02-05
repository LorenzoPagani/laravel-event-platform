@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="user_id" placeholder="user">
        <button type="submit">Create</button>
    </form>
@endsection
