<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estate;

class ListEstates extends Component
{
    public function render()
    {
        $estates = Estate::all();

        return view('livewire.list-estates', compact('estates'));
    }
}
