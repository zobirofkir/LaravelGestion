<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/new-directory", [TaskController::class, "index"])->name('Tasks');

    Route::get("/new-directory", [TaskController::class, "create"])->name('PostTaskController');
    Route::post("/new-directory", [TaskController::class, "store"])->name('PostTaskController');

    Route::get("/Get/Task", [TaskController::class, "GetTask"])->name('GetTasks');

    Route::get("/update/{id}", [TaskController::class, "edit"])->name('updateTasks');
    Route::post("/update/{id}", [TaskController::class, "update"])->name('updateTasks');

    Route::get("/delete/{id}", [TaskController::class, "destroy"])->name('deleteTasks');
    Route::delete("/delete/{id}", [TaskController::class, "destroy"])->name('deleteTasks');
});


