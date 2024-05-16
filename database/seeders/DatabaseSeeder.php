<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Athlete;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $trainer = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@softui.com',
            'password' => Hash::make('secret')
        ]);
        $athllete1 = Athlete::factory()->create([
            'name' => 'test athlete 1',
            'email' => 'test1@softui.com',
            'password' => Hash::make('secret'),
            'fk_trainer'  => $trainer->id,
        ]);
        $athllete2 = Athlete::factory()->create([
            'name' => 'test athlete 2',
            'email' => 'test2@softui.com',
            'password' => Hash::make('secret'),
            'fk_trainer'  => $trainer->id,
        ]);


        $this->call([
            InitialQuadsExercisesSeeder::class,
            InitialHamstringExercisesSeeder::class,
            InitialTricepsExercisesSeeder::class,
            InitialDeltsExercisesSeeder::class,
            InitialBicepsExercisesSeeder::class,
            InitialCalvesExercisesSeeder::class,
            InitialChestExercisesSeeder::class,
            InitialBackExercisesSeeder::class,
        ]);
    }
}
