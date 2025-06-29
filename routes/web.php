<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use function Pest\Laravel\get;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('test', function ()
{
    $job = Job::all()->first();
    \App\Jobs\TranslateJob::dispatch($job)->delay(2);
});

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index')->middleware('auth');
    Route::get('/jobs/create','create');
    Route::get('/jobs/{job}','show');
    Route::post('/jobs','store');
    Route::get('/jobs/{job}/edit','edit')->middleware('auth')->can('check','job');
    Route::patch('/jobs/{job}','update');
    Route::delete('/jobs/{job}','destroy');
});







Route::get("/register", [RegisterController::class, "create"]);
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/login", [SessionController::class, "create"])->name('login');
Route::post("/login", [SessionController::class, "store"]);
Route::post("/logout", [SessionController::class, "destroy"]);
