<?php

use function Livewire\Volt\{state};

state(['workouts' => [], 'showExerciseForm' => false]);

?>

<div>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($workouts as $workout)
            <x-card wire:key='{{ $workout->id }}'>
                <div class="flex justify-between">
                    <div>
                        <p class="text-xl font-bold text-gray-500">{{ $workout->name }}</p>
                        <p class="mt-2 text-xs">{{ Str::limit($workout->description, 50) }}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                    <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Exercise</th>
                                    <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Sets</th>
                                    <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Min Reps</th>
                                    <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Max Reps</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @php($exercises = $workout->exercises)
                                @foreach ($exercises as $exercise)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                        <td class="px-2 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $exercise->name }}</td>
                                        <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $exercise->pivot->sets }}</td>
                                        <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $exercise->pivot->min_reps }}</td>
                                        <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">{{ $exercise->pivot->max_reps }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <div x-data="{ expanded: false }" class="grid gap-4">
                    <x-card x-show="expanded" class="rounded-lg ring-2 ring-blue-500">
                        <livewire:workouts.add-exercise wire:key='w{{ $workout->id }}' />
                    </x-card>
                    <x-button type="button" x-on:click="expanded = ! expanded"> Add exercise</x-button>
                </div>
            </x-card>
        @endforeach
        <x-card wire:key='0' class="flex flex-col items-center place-content-center">
            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                <svg class="w-8 h-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> 
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <line x1="12" y1="5" x2="12" y2="19" /> 
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
            </button>
        </x-card>
    </div>
</div>
