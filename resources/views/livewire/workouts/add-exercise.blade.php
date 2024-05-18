<?php

use Livewire\Volt\Component;

new class extends Component {
    public $exercise;
    public $description;
    public $sets;
    public $minReps;
    public $maxReps;

    public function submit()
    {
        $validated = $this->validate([
            'exercise' => ['required'],
            'sets' => ['required', 'gt:0'],
            'minReps' => ['required', 'gt:0'],
            'maxReps' => ['required', 'gte:min-reps'],
        ]);
    }
}; ?>

<div>
    <form wire:submit='submit' class="space-y-4">
        <x-select wire:model="exercise" label="Exercise" placeholder="Select Exercise" :async-data="route('exercises')" option-label="name" option-value="id" option-description="info" />
        <x-textarea wire:model="description" label="Description"  placeholder="Write some notes if needed" />
        <x-inputs.number label="Number of sets" wire:model="sets" placeholder="0" />
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
            <x-inputs.number label="Min Reps" wire:model="minReps" placeholder="0" />
            <x-inputs.number label="Max Reps" wire:model="maxReps" placeholder="0" />
        </div>
        <div class="pt-4">
            <x-button type="submit" primary spinner>Submit</x-button>
        </div>
        <x-errors />
    </form>
</div>
