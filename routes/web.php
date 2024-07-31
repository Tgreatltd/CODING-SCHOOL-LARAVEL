<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');
// Route::get('/board/{name?}/{age?}', function ($name = null, $age = null) {
//     return view('board', ['name' => $name, 'age' => $age]);
// });

Route::get('/about/{name?}', function ($name=null){
 return view('about', ['name'=>$name]);
});

Route::get('/dashboard/{name?}/{age?}', [AuthController::class, 'profile'])->name('dashboard');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'signup'])->name('signup');