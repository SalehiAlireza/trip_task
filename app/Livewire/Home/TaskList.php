<?php

namespace App\Livewire\Home;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public function deleteTask($id)
    {
        Task::find($id)->delete();
    }

    public function render()
    {
        $tasks = Task::all();
        return view('livewire.home.task-list',compact('tasks'));
    }
}
