<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialCalvesExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Seated Calves Raise',
            'type'     => 'machine',
            'bodypart' => 'calves',
        ]);
        Exercise::factory()->create([
            'name'     => 'Leg Press Calves Raise',
            'type'     => 'machine',
            'bodypart' => 'calves',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Calves Raise',
            'type'     => 'smithmachine',
            'bodypart' => 'calves',
        ]);
    }
}
