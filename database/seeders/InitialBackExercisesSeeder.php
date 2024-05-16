<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialBackExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::factory()->create([
            'name'     => 'Pull-Up',
            'type'     => 'bodyweight',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Neutral Grip Pull-Up',
            'type'     => 'bodyweight',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Row',
            'type'     => 'dumbbell',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Seal Row',
            'type'     => 'dumbbell',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Pronated Grip Seal Row',
            'type'     => 'dumbbell',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Lat Pull-down',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Neutral Grip Lat Pull-down',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'One Arm Lat Pull-down',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Lat Pull-down',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Row',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Unilateral cables Row',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'cables Pull-Over',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Dumbbell Pull-Over',
            'type'     => 'dumbbell',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Pull-Over',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Pendlay Row',
            'type'     => 'barbell',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell Row',
            'type'     => 'barbell',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Iliac Row',
            'type'     => 'cables',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Neutral Grip Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Pronated Grip Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Machine Supinated Grip Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'One-Arm Machine Neutral Grip Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'One-Arm Machine Pronated Grip Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'One-Arm Machine Supinated Grip Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Chest Supported T-Bar Row',
            'type'     => 'machine',
            'bodypart' => 'back',
        ]);
        Exercise::factory()->create([
            'name'     => 'Barbell T-Bar Row',
            'type'     => 'barbell',
            'bodypart' => 'back',
        ]);
    }
}
