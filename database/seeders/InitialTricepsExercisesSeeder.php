<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialTricepsExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Close Grip Bench Press',
            'type'     => 'barbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Skullcrusher',
            'type'     => 'barbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Skullcrusher',
            'type'     => 'dumbbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Tricep Push-down',
            'type'     => 'cables',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'One-Arm Tricep Push-down',
            'type'     => 'cables',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Tricep Rope Push-down',
            'type'     => 'cables',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Overhead Tricep Extensions',
            'type'     => 'barbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Overhead Tricep Extensions',
            'type'     => 'dumbbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Overhead One-Arm Tricep Extensions',
            'type'     => 'dumbbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Overhead Tricep Extensions',
            'type'     => 'cables',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Overhead One-Arm Tricep Extensions',
            'type'     => 'cables',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Tricep Focused Dip Machine',
            'type'     => 'machine',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Tricep Focused Dip',
            'type'     => 'bodyweight',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Tricep Kickbacks',
            'type'     => 'dumbbell',
            'bodypart' => 'triceps',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Tricep Kickbacks',
            'type'     => 'cables',
            'bodypart' => 'triceps',
        ]);
    }
}
