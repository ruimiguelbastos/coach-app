<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microcycle extends Model
{
    use HasFactory;

    public function mesocycle()
    {
        return $this->belongsTo(Mesocycle::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class, 'fk_microcycle');
    }
}
