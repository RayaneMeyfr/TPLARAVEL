<x-layout>
    <x-slot:header>
        Job
    </x-slot:header>

    <h2>Job : {{ $job['title'] }} employeur : {{ $job->employer["nom"] }}</h2>
    <p>
        Salaire par année: {{ $job['salary'] }}
    </p>
    <a href="/jobs">Retour en arrière</a>
</x-layout>
