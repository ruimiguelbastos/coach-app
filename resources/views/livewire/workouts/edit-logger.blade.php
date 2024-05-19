 <x-card title="Chest Press">
     <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
        <thead>
            <tr>
                <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Reps</th>
                <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Load</th>
                <th scope="col" class="px-2 py-3 text-xs font-medium text-gray-500 uppercase text-start dark:text-neutral-500">Notes</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                <td class="px-2 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-inputs.number placeholder="0" />
                </td>
                <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-inputs.number placeholder="0" />
                </td>
                <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-input placeholder="Add notes if needed" />
                </td>
            </tr>
            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                <td class="px-2 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-inputs.number placeholder="0" />
                </td>
                <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-inputs.number placeholder="0" />
                </td>
                <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-input placeholder="Add notes if needed" />
                </td>
            </tr>
            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                <td class="px-2 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-inputs.number placeholder="0" />
                </td>
                <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-inputs.number placeholder="0" />
                </td>
                <td class="px-2 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                    <x-input placeholder="Add notes if needed" />
                </td>
            </tr>
        </tbody>
    </table> 
    <x-slot name="footer">
        <div class="flex justify-between gap-x-4">
            <x-button flat label="Cancel" wire:click="closeModal" />
            <x-button primary label="Save" wire:click="save" />
        </div>
    </x-slot>
</x-card>