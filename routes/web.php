<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::group(['prefix' => 'shop'], function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');
    });
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/catalog', function () {
    return Inertia::render('Catalog');
})->name('catalog');

Route::get('/ourjobs', function () {
    return Inertia::render('OurJobs');
})->name('ourjobs');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/workshop', function () {
    return Inertia::render('Workshop');
})->name('workshop');

Route::get('/news', function () {
    return Inertia::render('News');
})->name('news');

Route::get('/contacts', function () {
    return Inertia::render('Contact');
})->name('contacts');
