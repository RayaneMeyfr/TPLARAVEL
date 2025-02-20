

<x-layout>
    <x-slot:header>
        Jobs
    </x-slot:header>
    @foreach ($jobs as $job)
        <div>
            <h1>Job :</h1>
            <a href="/job/{{$job['id']}}"> {{$job['title']}} </a> 
            <h1>Employeur:</h1>    
            <p>{{ $job->employer['nom'] }}</p><br>
        </div>
        
    @endforeach

    <br>
    <div>
        {{  $jobs->links() }}
    </div>
    
</x-layout>