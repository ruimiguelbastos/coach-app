<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Workout extends Model
{
    use HasFactory;

    public function microcycle()
    {
        return $this->belongsTo(Microcycle::class);
    }

    public function mesocycle()
    {
        return $this->microcycle()->mesocycle();
    }

    public function exercises(): BelongsToMany
    {
        return $this
            ->belongsToMany(Exercise::class, 'workout_exercises', 'fk_workout', 'fk_exercise')
            ->withPivot('sets', 'min_reps', 'max_reps');
    }
}
