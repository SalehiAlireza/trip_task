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
    public $driver = null;
    public $drivers = null;
    public $truck = null;
    public $trucks = null;
    public $tasks = null;
    public $taskSelected = null;

    public function createTrip()
    {
        $this->validate([
            'taskSelected.*' => 'required',
            'tripName' => 'required',
            'driver' => 'required',
            'truck' => 'required',
        ]);

        $tasks = Task::freeTasks($this->taskSelected)->get();
        $data = ['name' => $this->tripName,'driver_id'=>$this->driver,'truck_id'=>$this->truck];
        $trip = Trip::query()->create($data);
        Task::query()->whereIn('id',$this->taskSelected)->update(['trip_id'=>$trip->id]);
        $this->dispatch('updateTripDetails');
        $this->dispatch('trip-created');
    }

    public function render()
    {
        $this->drivers = Driver::all();
        $this->trucks = Truck::all();
        $this->tasks = Task::all();
        return view('livewire.home.create-form');
    }
}
