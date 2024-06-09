<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function scopeFreeTasks($query,$taskLists)
    {
        return $query->whereIn($taskLists)->where('trip_id',null);
    }
}
