<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\TechworkController;
use App\Http\controllers\ProfileController;
use App\Http\controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('tasklist');
});
//Route::redirect('/', '/login');

Route::middleware(['auth'])->group(function() {
    



Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::name('techwork.')->group(function() {
    Route::get('/techwork/add', [TechworkController::class, 'create'])->name('add');
    Route::post('/techwork/save', [TechworkController::class, 'store'])->name('store');
});

Route::name('user.')->group(function() {
    Route::get('/user/list', [UserController::class, 'index'])->name('list');
    Route::get('/user/add', [UserController::class, 'create'])->name('add');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('delete'); });
    
});


require __DIR__.'/auth.php';
