<x-layout>
    <x-slot:header>
        Job
    </x-slot:header>

    <h2>{{ $job['title'] }}</h2>
    <p>
        Salaire par année: {{ $job['salary'] }}
    </p>
</x-layout>
