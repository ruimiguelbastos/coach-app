<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialQuadsExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Barbell Back Squat',
            'type'     => 'barbell',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Front Squat',
            'type'     => 'barbell',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'type'     => 'machine',
            'name'     => 'Leg Press',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Unilateral Leg Press',
            'type'     => 'machine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Squat',
            'type'     => 'smithmachine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Hack Squat',
            'type'     => 'machine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'V-Squat',
            'type'     => 'machine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Bulgarian Split Squat',
            'type'     => 'dumbbell',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Bulgarian Split Squat',
            'type'     => 'smithmachine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Pendulum Squat',
            'type'     => 'machine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Leg Extensions',
            'type'     => 'machine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Somersault Squat',
            'type'     => 'barbell',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'SmithMachine Somersault Squat',
            'type'     => 'smithmachine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Lunges',
            'type'     => 'smithmachine',
            'bodypart' => 'quads',
        ]);
        Exercise::factory()->create([
            'name'     => 'Walking Lunges',
            'type'     => 'dumbbell',
            'bodypart' => 'quads',
        ]);
    }
}
