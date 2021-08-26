<?php

use App\Http\Controllers\AlertController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route to the about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route to the admin page
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin', [UserController::class, 'adminUsersList'])->name('admin');

// Route to the Alert Details page
Route::get('/alert-details', function () {
    return view('alert-details');
})->name('alert-details');

// Route to the Alerts page
Route::get('/alerts', function () {
    return view('alerts');
})->name('alerts');

Route::post('/alerts/{id}', [AlertController::class, 'alert-show'])->name('alert-show');

// Route to the Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [UserController::class, 'contact-form'])->name('contact-submit');

// Route to the Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Route to the login page
Route::get('/login', [UserController::class, 'userEdit'])->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');

// Route to the procedures
Route::get('/procedures', function () {
    return view('procedures');
})->name('procedures');

// Route to the Register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Route to the terms and conditions
Route::get('terms', function () {
    return view('terms');
})->name('terms');

// Route to the User Control panel view
Route::get('user', function () {
    return view('user');
})->name('user');

Route::post('user', [UserController::class, 'modification-submit'])->name('modification-submit');
