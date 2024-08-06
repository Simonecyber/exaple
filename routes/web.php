<?php

use Illuminate\Support;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Jobs\TranslateJob;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;



/*
Route::controller(JobController::class)->group(function(){

//Index
Route::get('/jobs', 'index');
//Create
Route::get('/jobs/create','create');
//Show
Route::get('/jobs/{job}', 'show');
//Store
Route::post('/jobs', 'store');
//Edit
Route::get('/jobs/{id}/edit', 'edit');
//Update
Route::patch('/jobs/{job}', 'udate');
//Destroy
Route::delete('/jobs/{job}','destroy');


=================
TIP FOR ROUTE
- Route model binding
- Controller classes
- Route::view()
- listing your route
- route groups
- route resources



});*/

Route::get('test', function() {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'Done';
});


Route::view('/', 'home');
Route::view('/contact', 'contact');

 Route::get('/jobs', [JobController::class, 'index']);
 Route::get('/jobs/create', [JobController::class, 'create']);
 Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
 Route::get('/jobs/{job}', [JobController::class, 'show']);

 Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
     ->middleware('auth')
     ->can('edit', 'job');

 Route::patch('/jobs/{job}', [JobController::class, 'update']);
 Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);