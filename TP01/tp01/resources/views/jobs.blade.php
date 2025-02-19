

<x-layout>
    <x-slot:header>
        Jobs
    </x-slot:header>
    @foreach ($jobs as $job)
        <div>
            <h1>Job :</h1>
            <a href="/job/{{$job['id']}}"> {{$job['title']}} / employeur : </a> 
            <h1>Employeur:</h1>    
            <p>{{ $job->employer['nom'] }}</p><br>
        </div>
        
    @endforeach
</x-layout>