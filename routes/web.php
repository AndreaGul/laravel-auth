<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//rotta prima di essere inserita in un gruppo
// Route::get('/dashboard', [DashboardController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');



//middleware
Route::middleware(['auth','verified'])
    //nome
    ->name('admin.')
    //prefisso
    ->prefix('admin')

    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


        Route::resource('projects', ProjectController::class)->parameters(['projects' => 'project:slug']);
        //es altra rotta
        // Route::get('/andrea', function () {
        //    return view('dashboard');
        //})->name('andrea');

    });

require __DIR__.'/auth.php';
