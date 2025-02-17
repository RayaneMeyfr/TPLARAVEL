@extends('layouts.app')

@section('content')

    <ul class="mt-4">
        @foreach ($todos as $todo)
            <li class="p-4 bg-white shadow mb-2">
                <a href="{{ route('todos.show', $todo['id']) }}">{{ $todo['title'] }}</a>
                <span class="ml-2 text-gray-500">{{ $todo['completed'] ? '✅' : '❌' }}</span>
            </li>
        @endforeach
    </ul>
@endsection
