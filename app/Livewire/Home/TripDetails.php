<?php

namespace App\Livewire\Home;

use App\Models\Trip;
use Livewire\Component;

class TripDetails extends Component
{
    public $driver = '---';
    public $truck = '---';
    public $truckCode = '---';
    public $tasks = [];

    protected $listeners = ['updateTripDetails' => 'updateTripDetails'];

    public function updateTripDetails()
    {
        $this->render();
    }

    public function showDetail($id)
    {
        $trip = Trip::find($id);
        $this->truck = $trip->truck->truck_model;
        $this->truckCode = $trip->truck->truck_code;
        $this->driver = $trip->driver->name;
        $this->tasks = $trip->tasks;
    }




    public function render()
    {
        $trips = Trip::all();
        return view('livewire.home.trip-details',compact('trips'));
    }
}
