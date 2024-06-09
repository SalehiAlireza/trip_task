<?php

namespace App\Livewire\Home;

use App\Models\Driver;
use App\Models\Task;
use App\Models\Trip;
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
        $this->validate([
            'tasks.*' => 'required|exists:tasks,id'
        ]);
//        $tasks = Task::freeTasks($this->tasks)->get();
//        if ($tasks->count() == 0)

        $data = ['name' => $this->tripName,'driver_id'=>$this->driver,'truck_id'=>$this->truck];
        $trip = Trip::query()->create($data);
        Task::query()->whereIn('id',$this->tasks)->update(['trip_id'=>$trip->id]);


    }

    public function render()
    {
        $drivers = Driver::all();
        $trucks = Truck::all();
        $tasks = Task::all();
        return view('livewire.home.create-trip',compact('drivers','trucks','tasks'));
    }
}
