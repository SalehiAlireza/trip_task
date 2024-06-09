<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public $guarded = [];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
