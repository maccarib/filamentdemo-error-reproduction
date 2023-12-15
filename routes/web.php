<?php

use App\Livewire\Form;

use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Route::get('form', Form::class);

Route::get('/reproduction/orders', function () {
    return view('reproduction.orders');
})->middleware(['auth', 'verified']);
