<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-purple-500">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>