<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddSecondaryMember extends Component
{
  public $count = 0;

  public function render()
  {
      return view('livewire.add-secondary-member');
  }

  public function increment()
  {
    $this->count++;
  }

  public function decrement()
  {
    $this->count--;
  }
}
