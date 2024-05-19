<?php

use App\Models\Mesocycle;
use App\Models\Workout;
use Livewire\Volt\Component;

new class extends Component {
    public $workout;
    public $mesocycleId;

    public function mount(Workout $workout, int $mesocycleId)
    {
        $this->workout     = $workout;
        $this->mesocycleId = $mesocycleId;
    }

    public function delete(int $exerciseId)
    {
        $this->workout->exercises()->detach($exerciseId);
    }
}?>

<div>
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
                           <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Actions</th>
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
                                    <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                        <x-button.circle wire:click="$dispatch('openModal', { component: 'workouts.edit-logger' })" secondary icon="clipboard-list" />
                                        <x-button.circle negative icon="ban" wire:click="delete('{{ $exercise->id }}')" />
                                    <td>
                                </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div x-data="{ expanded: false }" class="grid gap-4">
         <x-card x-show="expanded" class="relative rounded-lg ring-2 ring-blue-500">
            <x-button.circle 2xs primary icon="x" x-on:click="expanded = ! expanded" class="absolute top-0 right-0 m-2"/>
            <livewire:workouts.add-exercise :$workout :$mesocycleId wire:key='w{{ $workout->id }}' />
         </x-card>
         <x-button x-show="! expanded" primary icon="plus" label="Add Exercise" x-on:click="expanded = ! expanded"> Add exercise</x-button>
      </div>
   </x-card>
</div>