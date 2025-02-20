<x-layout>
    <x-slot:header>
        {{$vinyle['tittle']}}
    </x-slot:header>
    
    <div class="w-full min-h-screen mx-auto mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 px-4 lg:px-8">
        <div class="col-span-full text-center">
            <h1 class="text-3xl font-bold">{{ $vinyle['tittle'] }}</h1>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-lg font-semibold">Artiste</p>
            <p>{{ $vinyle->artist['name'] }}</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-lg font-semibold">Année de création</p>
            <p>{{ $vinyle['release_year'] }}</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-lg font-semibold">Label</p>
            <p>{{ $vinyle['label'] }}</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow col-span-full lg:col-span-2">
            <p class="text-lg font-semibold">Description</p>
            <p>{{ $vinyle['description'] }}</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-lg font-semibold">Date d'ajout</p>
            <p>{{ $vinyle['date_add'] }}</p>
        </div>

        <div class="col-span-full text-center mt-6">
            <a href="/" class="text-blue-500 hover:underline">Retour à l'Accueil</a>
        </div>
    </div>
    
</x-layout>
