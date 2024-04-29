<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
    
    <h2 class="font-bold text-lg text-cyan-500">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>