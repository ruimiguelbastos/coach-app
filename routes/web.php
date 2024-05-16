<?php

use App\Models\Athlete;
use App\Models\Macrocycle;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('clients', 'clients.index')
    ->middleware(['auth'])
    ->name('clients.index');


Route::get('clients/{client}', function (Athlete $client) {
        return view('clients.view', ['client' => $client]);
})
    ->middleware(['auth'])
    ->name('clients.view');

Route::get('macrocycle/{macrocycle}', function (Macrocycle $macrocycle) {
        $client = $macrocycle->client;

        return view('macrocycle', ['macrocycle' => $macrocycle, 'client' => $client]);
})
    ->middleware(['auth'])
    ->name('macrocycle');

require __DIR__.'/auth.php';
