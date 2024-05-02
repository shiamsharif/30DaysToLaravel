<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    
    <div class="">
        @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="text-purple-500  block px-4 border border-gray-300 p-4 mb-2 rounded-lg ">
                    <strong>{{ $job['title'] }} : </strong> Pays {{ $job['salary'] }} per year.
                </a>
        @endforeach
    </div>

    
</x-layout>