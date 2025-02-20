<x-layout>
    <x-slot:header>
        Job
    </x-slot:header>

    <h2>Job : {{ $job->title }} employeur : {{ $job->employer->nom }}</h2>
    <p>
        Salaire par année: {{ $job->salary }}<br><br>
        <a href="/job/{{ $job->id }}/edit">Edit Job</a><br>
        <a href="/jobs">Retour en arrière</a>
    </p>
    
</x-layout>
