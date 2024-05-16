<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialChestExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Barbell Bench Press',
            'type'     => 'barbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbell Bench Press',
            'type'     => 'dumbbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Bench Press',
            'type'     => 'smithmachine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Incline Barbell Bench Press',
            'type'     => 'barbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Incline Dumbell Bench Press',
            'type'     => 'dumbbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Incline Smith Machine Bench Press',
            'type'     => 'smithmachine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Decline Barbell Bench Press',
            'type'     => 'barbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Decline Dumbell Bench Press',
            'type'     => 'dumbbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Decline Smith Machine Bench Press',
            'type'     => 'smithmachine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Chest Press',
            'type'     => 'machine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Incline Chest Press',
            'type'     => 'machine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Pec Deck',
            'type'     => 'machine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbell Chest Flys',
            'type'     => 'dumbbell',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Chest Flys',
            'type'     => 'cables',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Chest Focused Bodyweight Dips',
            'type'     => 'bodyweight',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Chest Focused Machine Dips',
            'type'     => 'machine',
            'bodypart' => 'chest',
        ]);
        Exercise::factory()->create([
            'name'     => 'Push-Ups',
            'type'     => 'bodyweight',
            'bodypart' => 'chest',
        ]);
    }
}
