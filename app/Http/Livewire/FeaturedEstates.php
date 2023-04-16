<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estate;

class FeaturedEstates extends Component
{
    public function render()
    {
        $featureds = Estate::all()->random(6);


        return view('livewire.featured-estates', compact('featureds'));
    }
}
