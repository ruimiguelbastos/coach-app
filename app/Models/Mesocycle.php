<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesocycle extends Model
{
    use HasFactory;

    public function macrocycle()
    {
        return $this->belongsTo(Macrocycle::class);
    }
}
