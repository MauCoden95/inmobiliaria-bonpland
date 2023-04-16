<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estate;


class ShowEstates extends Component
{
    public $type;
    public $operation;
    public $ambients;
    public $country;
    public $city;
    public $min_square_meters = 0;
    public $max_square_meters = 50000000000;
    public $min_price = 0;
    public $max_price = 50000000000;
    

    public function render()
    {
        $cities = Estate::pluck('city');
        $city_unique = $cities->unique();

        $estates = Estate::where('type','like','%'.$this->type.'%')
                           ->where('operation','like','%'.$this->operation.'%')
                           ->where('ambients','like','%'.$this->ambients.'%')
                           ->where('country','like','%'.$this->country.'%')
                           ->where('city','like','%'.$this->city.'%')
                           ->where('square_meters','>', $this->min_square_meters)
                           ->where('square_meters','<', $this->max_square_meters)
                           ->where('price','>', $this->min_price)
                           ->where('price','<', $this->max_price)
                           ->get();

        return view('livewire.show-estates', [
            'estates' => $estates,
            'city_unique' => $city_unique
         ]);
    }
}
