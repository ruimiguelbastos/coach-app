<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialHamstringExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Barbell Deadlift',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Deficit Barbell Deadlift',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Romanian Deadlift',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Deficit Barbell Romanian Deadlift',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Romanian Deadlift',
            'type'     => 'dumbbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Romanian Deadlift',
            'type'     => 'machine',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Stiff Deadlift',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Deficit Barbell Stiff Deadlift',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Stiff Deadlift',
            'type'     => 'dumbbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Stiff Deadlift',
            'type'     => 'machine',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Seated Leg Curl',
            'type'     => 'machine',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Lying Leg Curl',
            'type'     => 'machine',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Leg Curl',
            'type'     => 'dumbbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Hip Extensions',
            'type'     => 'machine',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Good-Morning',
            'type'     => 'barbell',
            'bodypart' => 'hamstrings',
        ]);
        Exercise::factory()->create([
            'name'     => 'Smith Machine Good-Morning',
            'type'     => 'smithmachine',
            'bodypart' => 'hamstrings',
        ]);
    }
}
