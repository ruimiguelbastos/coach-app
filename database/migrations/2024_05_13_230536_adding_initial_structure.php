<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('macrocycles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_athlete');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('fk_athlete')->references('id')->on('athletes');
        });

        Schema::create('mesocycles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_macrocycle');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('fk_macrocycle')->references('id')->on('macrocycles');
        });

        Schema::create('microcycles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_mesocycle');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('fk_mesocycle')->references('id')->on('mesocycles');
        });

        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->enum('bodypart', ['chest', 'back', 'quads', 'hamstrings', 'glutes', 'calves', 'biceps', 'triceps', 'abs', 'delts']);
            $table->enum('type', ['barbell', 'dumbbell', 'machine', 'smithmachine', 'cables', 'bodyweight']);
            $table->timestamps();
            $table->unique('name', 'type', 'bodypart');
        });

        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_microcycle');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('fk_microcycle')->references('id')->on('microcycles');
        });

        Schema::create('workout_exercises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_workout');
            $table->unsignedBigInteger('fk_exercise');
            $table->unsignedInteger('sets');
            $table->unsignedInteger('min_reps');
            $table->unsignedInteger('max_reps');
            $table->timestamps();
            $table->foreign('fk_workout')->references('id')->on('workouts');
            $table->foreign('fk_exercise')->references('id')->on('exercises');
        });

        Schema::create('workout_exercise_loggers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_workout_exercise');
            $table->unsignedInteger('set');
            $table->unsignedInteger('performed_reps');
            $table->timestamps();
            $table->foreign('fk_workout_exercise')->references('id')->on('workout_exercises');
        });

        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_trainer');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->text('about')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('fk_trainer')->references('id')->on('users');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('macrocycles');
        Schema::dropIfExists('mesocycles');
        Schema::dropIfExists('microcycles');
        Schema::dropIfExists('exercises');
        Schema::dropIfExists('workouts');
        Schema::dropIfExists('workout_exercises');
        Schema::dropIfExists('workout_exercise_loggers');
        Schema::dropIfExists('athletes');
    }
};
