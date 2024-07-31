<?php

use Illuminate\Support;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');

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

Route::resource('jobs', JobController::class, [
    'except' => ['edit']
]);

Route::view('/contact', 'contact');