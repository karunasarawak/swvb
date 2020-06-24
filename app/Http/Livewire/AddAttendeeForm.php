<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddAttendeeForm extends Component
{
    public $flag = 0;
    public function render()
    {
        return view('livewire.add-attendee-form');
    }

    public function add()
    {
      $this->flag = 1;
    }

    public function remove()
    {
      $this->flag = 0;
    }
}
