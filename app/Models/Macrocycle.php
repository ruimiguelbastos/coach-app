<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macrocycle extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Athlete::class);
    }

    public function mesocycles()
    {
        return $this->hasMany(Mesocycle::class);
    }
}
