<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialDeltsExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Barbell Military Press',
            'type'     => 'barbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Shoulder Press',
            'type'     => 'dumbbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Arnold Press',
            'type'     => 'dumbbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Shoulder Press',
            'type'     => 'smithmachine',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Lateral Raises',
            'type'     => 'dumbbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => '45 Degrees Lying Dumbbell Lateral Raises',
            'type'     => 'dumbbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Seated Dumbbell Lateral Raises',
            'type'     => 'dumbbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Lateral Raises',
            'type'     => 'cables',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Front Raises',
            'type'     => 'dumbbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Front Press',
            'type'     => 'barbell',
            'bodypart' => 'delts',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Lateral Raises',
            'type'     => 'machine',
            'bodypart' => 'delts',
        ]);

        Exercise::factory()->create([
            'name'     => 'Machine Shoulder Press',
            'type'     => 'machine',
            'bodypart' => 'delts',
        ]);
    }
}
