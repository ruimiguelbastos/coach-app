<?php

use function Livewire\Volt\{state};

state(['mesocycleId', 'microcycles']);

?>

<div>
    <ul class="block w-11/12 mx-auto my-4" x-data="{selected:null}">
        {{-- Making all elememnts open by default. To change logic change != to == --}}
        @foreach ($microcycles as $microcycle)
            @php($workouts = $microcycle->workouts)
            <li class="flex flex-col align-center">
                    <h4 @click="selected !== {{$microcycle->id}} ? selected = {{$microcycle->id}} : selected = null"
                        :class="{'cursor-pointer px-5 py-3 bg-indigo-500 text-white text-center inline-block hover:opacity-75 hover:shadow hover:-mb-3': true, 'rounded-b': selected != {{$microcycle->id}}}">{{$microcycle->name}}</h4>
                    <div x-show="selected != {{$microcycle->id}}" :class="{'border py-4 px-2': true, 'rounded-b': selected != {{$microcycle->id}}}">
                        <livewire:microcycles.show-workouts :$microcycle :$workouts :$mesocycleId />
                    </div>
                </li>
        @endforeach
         <li class="flex flex-col align-center">
            <h4 class="{'cursor-pointer px-5 py-3 bg-indigo-500 text-white text-center inline-block hover:opacity-75 hover:shadow hover:-mb-3'}">Add Microcycle</h4>
    </ul>
</div>
