<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    
    <div class="">
        @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="text-purple-500 bg-yellow-100 hover:bg-yellow-200 block px-4 border border-gray-300 p-4 mb-2 rounded-lg ">
                    <div class="font-bold text-cyan-400">{{ $job->employer->name }}</div>
                    <div>
                        <strong>{{ $job['title'] }} : </strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
        @endforeach
    </div>

    
</x-layout>