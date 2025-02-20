

<x-layout>
    <x-slot:header>
        Create
    </x-slot:header>
    
    <form method="post" action="/job/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Mody your job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Merci de rensigner vos info ici</p>
      
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$30.000 USD" value="{{ $job->title }}">
                    </div>
                    @error('title')
                        <p>{{ $message }}</p>                        
                    @enderror
                </div>
            </div>
      
            <div class="col-span-full">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <input name="salary" id="salary" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="{{ $job->salary }}"></input>
                    </div>
                    @error('salary')
                        <p>{{ $message }}</p>                        
                    @enderror
                    </div>

                    {{-- @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif --}}
                </div>
            </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" form="delete-form" class="text-sm/6 font-semibold text-red-900" >Delete</button>
            <a href="/job/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>

      </form>

      <form action="/job/{{ $job->id }}" method="post" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
      </form>
</x-layout>