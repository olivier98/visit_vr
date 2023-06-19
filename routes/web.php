<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ExhibitorController;
use App\Http\Controllers\SignUpController;

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

Route::get('/', function () {
    return view('pages.accueil');
});

Route::get('/started', function(){
    return view('pages.started');
});

Route::get('/sign-up/{name}', [SignUpController::class, 'index'])->name('sign');

// Route::get('/visitor-sign-in', function(){
//     return view('dashboard.visitor.register');
// });

// Route::get('/exhibitors-sign-in', function(){
//     return view('dashboard.Exhibitors.register');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:exhibitor'])->name('dashboard');

Route::post('/visitor', [VisitorController::class, 'store'])->name('store.visitor');
Route::post('/exhibitor_store', [ExhibitorController::class, 'store'])->name('store.exhibitor');

Route::middleware('auth', 'role:exhibitor')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'role:visitor,exhibitor')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

require __DIR__.'/auth.php';
