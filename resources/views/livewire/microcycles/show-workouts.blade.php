<?php

use App\Models\Mesocycle;
use App\Models\Microcycle;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Volt\Component;

new class extends Component {
    public $microcycle;
    public $workouts;
    public $mesocycleId;

    public $name;
    public $description;

    public function mount(Microcycle $microcycle, Collection $workouts, int $mesocycleId)
    {
        $this->microcycle  = $microcycle;
        $this->workouts    = $workouts;
        $this->mesocycleId = $mesocycleId;
    }

    public function submit()
    {
        $validated = $this->validate(['name' => ['required']]);

        $workout = new Workout(['name' => $this->name, 'description' => $this->description]);
        $workout->microcycle()->associate($this->microcycle);

        $workout->save();

        redirect(route('mesocycle', ['mesocycle' => $this->mesocycleId]));
    }
} ?>

<div class="grid grid-cols-1 gap-4 md:grid-cols-3">
    @foreach ($workouts as $workout)
        <livewire:workouts.show :$workout :$mesocycleId />
    @endforeach
    <x-card x-data="{ showCreateForm: false }" class="flex">
        <div class="flex flex-col items-center flex-1 place-content-center" x-show="! showCreateForm">
            <x-button.circle primary lg icon="plus" x-on:click="showCreateForm = ! showCreateForm"/>
        </div>
        <div x-show="showCreateForm" class="grid flex-1 gap-4">
            <div class="relative">
                <x-button.circle 2xs primary icon="x" x-on:click="showCreateForm = ! showCreateForm" class="absolute top-0 right-0 m-2"/>
            </div>
            <form wire:submit='submit'>
                <x-input wire:model="name" label="Name"  placeholder="Ex: Chest Day" />
                <x-textarea wire:model="description" label="Description"  placeholder="Ex: Walk 15 minutes after the workout" />
                <div class="pt-4">
                    <x-button type="submit" primary spinner>Submit</x-button>
                </div>
                <x-errors />
            </form>
      </div>
    </x-card>
</div>
