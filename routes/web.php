<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::redirect('/', 'login',);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/contact', function () {
//     return view('contact');

// })->middleware(['auth'])->name('contact');

// Route::get('/users', function () {
//     return view('user');

// });
 
Route::get('/users', [ContactController::class, 'index'])->middleware(['auth'])->name('users');
Route::get('/contact', [ContactController::class, 'contact'])->middleware(['auth'])->name('contact');
Route::Post('/contact', [ContactController::class, 'store'])->middleware(['auth'])->name('contact');


require __DIR__.'/auth.php';
