

<x-layout>
    <x-slot:header>
        Job
    </x-slot:header>
    @foreach ($jobs as $job)
        <a href="/job/{{$job['id']}}"> {{$job['title']}} </a><br>
    @endforeach
</x-layout>