<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\http\Controllers\ContactController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegisterController;



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

// Route::name('name_lnk')->get('/getUrl', [class, 'action']);
Route::name('about')->get('/about', [AboutController::class, 'index']);

Route::name('contact')->get('/contact', [ContactController::class, 'index']);

Route::name('login')->get('/login', [LoginController::class, 'index']);

Route::name('login.user')->post('/login', [LoginController::class, 'login']);

Route::name('register')->get('/register', [RegisterController::class, 'index']);

Route::name('register.user')->post('/register', [RegisterController::class, 'store']);



// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/register', function () {
//     return view('register');
// });