<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Clients')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-button class="mb-12" primary icon-right="plus" href="" wire:navigate>Create
                    macrocycle</x-button>
                    
            <livewire:macrocycle-table clientId="{{ $client->id }}" />
        </div>
    </div>
</x-app-layout>
