<?php

namespace App\Livewire\Workouts;

use LivewireUI\Modal\ModalComponent;

class EditLogger extends ModalComponent
{
    public function render()
    {
        return view('livewire.workouts.edit-logger');
    }
}
