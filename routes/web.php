<?php

use Illuminate\Support;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
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
Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class, [
    
]);

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);