<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
    
    <div class="bg-purple-200 hover:bg-purple-300 p-5 rounded-lg">
        <h2 class="font-bold text-lg text-cyan-500">{{ $job['title'] }}</h2>

        <p>
            This job pays {{ $job['salary'] }} per year.
        </p>
    </div>
</x-layout>