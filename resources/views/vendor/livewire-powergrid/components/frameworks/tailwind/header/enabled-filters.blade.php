@if (count($enabledFilters))
    <div
        data-cy="enabled-filters"
        class="pg-enabled-filters-base"
    >
        @if (count($enabledFilters) > 1)
            <div class="flex group items-center gap-3 cursor-pointer">
                <span
                    wire:click.prevent="clearAllFilters"
                    class="rounded-full group-hover:text-pg-primary-800 group-hover:dark:text-pg-primary-300 outline-none inline-flex items-center border px-2 py-0.5 font-bold
                     text-xs border-pg-primary-500 bg-pg-primary-200 dark:bg-pg-primary-600 dark:border-transparent dark:text-pg-primary-100 pg-enabled-filters-span-clear-all"
                >
                    {{ trans('livewire-powergrid::datatable.buttons.clear_all_filters') }}
                    <x-livewire-powergrid::icons.x class="w-4 h-4" />
                </span>
            </div>
        @endif

        @foreach ($enabledFilters as $filter)
            @isset($filter['label'])
                <div
                    wire:key="enabled-filters-{{ $filter['field'] }}"
                    class="flex group items-center gap-3 cursor-pointer"
                >
                    <span
                        data-cy="enabled-filters-clear-{{ $filter['field'] }}"
                        wire:click.prevent="clearFilter('{{ $filter['field'] }}')"
                        class="rounded-full group-hover:text-pg-primary-600 group-hover:dark:text-pg-primary-300 outline-none inline-flex items-center border px-2 py-0.5 font-bold
                        text-xs border-pg-primary-500 bg-pg-primary-100 dark:bg-pg-primary-700 dark:bg-opacity-80 dark:border-transparent dark:text-pg-primary-200 dark:text-pg-primary-50 pg-enabled-filters-span"
                    >
                        {{ $filter['label'] }}
                        <x-livewire-powergrid::icons.x class="w-4 h-4" />
                    </span>
                </div>
            @endisset
        @endforeach
    </div>
@endif
