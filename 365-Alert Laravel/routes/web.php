<?php


use App\Http\Controllers\AlertController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Support\Facades\Mail;

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

//Makes a mailable, access it from /email. Edit it in welcome.blade
Route::get('/email', function () {
    Mail::to('hello@example.com')->send(new WelcomeMail());
    return new WelcomeMail();
});


// Route for the admin page to display all of the users list
Route::get('/admin', [UserController::class, 'adminUsersList'])->name('admin');

// Route to edit a specific user selected in the list
Route::get('/admin/edit/{id}', [UserController::class, 'adminUserEdit']);

// Route to update the user information
Route::post('/admin/edit/{id}', [UserController::class, 'adminUserUpdate']);

// Route to delete specific user
Route::get('/admin/delete/{id}', [UserController::class, 'adminUserDelete']);

// Route to the Alert Details page
Route::get('/alert-details', function () {
    return view('alert-details');
})->name('alert-details');

// Route to show a specific alert details
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

Route::get('/home1', function () {
    return view('home1');
})->name('home1');

// Route to the procedures
Route::get('/procedures', function () {
    return view('procedures');
})->name('procedures');

// Route to the terms and conditions
Route::get('terms', function () {
    return view('terms');
})->name('terms');

// Route to the User Control panel view
Route::get('user', function () {
    return view('user');
})->name('user');

// Route to the about page
Route::get('client-settings', function () {
    return view('client-settings');
})->name('client-settings');

// Route to submit the User modification
Route::post('user', [UserController::class, 'modification-submit'])->name('modification-submit');

//Route to get the api
Route::get('/alerts', [AlertController::class, 'showAlerts'])->name('alerts');



require __DIR__ . '/myauth.php';

// Route to add to the playlist a specific alert

Route::get('/add-alert/{user_id}/{alert_id}', [AlertController::class, 'addAlert'])->name('add-alert');

