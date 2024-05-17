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

    public function microcycles()
    {
        return $this->hasMany(Microcycle::class, 'fk_mesocycle');
    }
}
