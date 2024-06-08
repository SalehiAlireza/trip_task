<?php

namespace App\Livewire\Home;

use Livewire\Component;

class TripDetails extends Component
{
    public $driver = '---';
    public $truck = '---';
    public $truckCode = '---';
    public $tasks = [];

    public function showDetail($id)
    {
        $this->truck = "asd";
        $this->driver = "asd";
        $this->truckCode = "asd";
        $this->tasks = ['654','65456','4565'];
    }




    public function render()
    {
        return view('livewire.home.trip-details');
    }
}
