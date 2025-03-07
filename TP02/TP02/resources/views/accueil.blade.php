<x-layout>
    <x-slot:header>
        Accueil
    </x-slot:header>

    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($vinyles as $vinyle)

            <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500"> {{$vinyle['date_add']}} </time>
                </div>

                <div class="group relative">
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <x-nav-link><x-slot:id>{{$vinyle['id']}}</x-slot:id>{{$vinyle['title']}}</x-nav-link>
                    </h3>

                    <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{$vinyle['preview']}} </p>
                </div>

                <div class="relative mt-8 flex items-center gap-x-4">
                    <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                           <x-nav-link><x-slot:id>{{$vinyle['id']}}</x-slot:id>{{$vinyle->artist['name']}}</x-nav-link>
                        </p>
                        <p class="text-gray-600">{{$vinyle['release_year']}}</p>
                    </div>
                </div>
            </article>

        @endforeach
    </div>
    <div class="mt-6 flex justify-end">
        {{ $vinyles->links() }}
    </div>
</x-layout>