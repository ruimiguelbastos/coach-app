<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialBicepsExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Dumbbell Bicep Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Spider Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Bicep Curl',
            'type'     => 'barbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Spider Curl',
            'type'     => 'barbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Preacher Curl',
            'type'     => 'barbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Preacher Curl Machine',
            'type'     => 'machine',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Preacher Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'One-Arm Dumbbell Preacher Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Hammer Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Hammer Curl',
            'type'     => 'cables',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Concentration Bicep Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Incline Dumbbell Bicep Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Overhead cables Bicep Curl',
            'type'     => 'cables',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Bicep Curl',
            'type'     => 'cables',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Unilateral Bicep Curl',
            'type'     => 'cables',
            'bodypart' => 'biceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Unilateral Behind-the-back Bicep Curl',
            'type'     => 'cables',
            'bodypart' => 'biceps',
        ]);
    }
}
