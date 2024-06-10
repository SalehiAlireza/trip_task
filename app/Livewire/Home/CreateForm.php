<?php

namespace App\Livewire\Home;

use App\Models\Driver;
use App\Models\Task;
use App\Models\Trip;
use App\Models\Truck;
use Livewire\Component;

class CreateForm extends Component
{
    public $tripName = null;
    public $drivers = null;
    public $trucks = null;
    public $tasks = null;


    public function createTrip()
    {
        $this->validate([
            'tasks.*' => 'required',
            'tripName' => 'required',
            'driver' => 'required',
            'truck' => 'required',
        ]);

        $tasks = Task::freeTasks($this->tasks)->get();
        $data = ['name' => $this->tripName,'driver_id'=>$this->driver,'truck_id'=>$this->truck];
        $trip = Trip::query()->create($data);
        Task::query()->whereIn('id',$this->tasks)->update(['trip_id'=>$trip->id]);
    }

    public function render()
    {
        $this->drivers = Driver::all();
        $this->trucks = Truck::all();
        $this->tasks = Task::all();
        return view('livewire.home.create-form');
    }
}
