<?php

namespace App\Livewire\Home;

use App\Models\Driver;
use App\Models\Task;
use App\Models\Truck;
use Livewire\Component;

class CreateTrip extends Component
{
    public $tripName = null;
    public $driver = null;
    public $truck = null;
    public $tasks = null;


    public function createTrip()
    {
        Task::query()->create();
        dd($this->tripName,$this->driver,$this->tasks);
    }

    public function render()
    {
        $drivers = Driver::all();
        $trucks = Truck::all();
        $tasks = Task::all();
        return view('livewire.home.create-trip',compact('drivers','trucks','tasks'));
    }
}
