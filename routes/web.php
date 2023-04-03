<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Absen;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AbsenController;

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

//event attendance
Route::prefix('faculty')->middleware(['faculty'])->group(function(){
    Route::resource('/event', EventController::class);
    Route::get('/event/{id}/attendance/scan', function () {
        return view('attendance.scan', ['absen' => Absen::all()]);
    }); 
   
});

// class attendance
Route::prefix('organization')->middleware(['auth','organization'])->group(function(){
    Route::resource('/subject', SubjectController::class);
    Route::get('/subject/attendance/scan', function () {
        return view('attendance.scan', ['absen' => Absen::all()]);
    });
    // Route::post('/subject/attendance/store', [AbsenController::class, 'store'])->name('store');
});
 
 Route::post('/attendance/store', [AbsenController::class, 'store'])->name('store');




// Route::get('/attendance/scan', [Absen::all()]);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
