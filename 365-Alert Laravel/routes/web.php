<?php


use App\Http\Controllers\AlertController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\VisitorContact;

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

/*Route::get('/email', function () {
    return view('contact');
});*/


// Route for the admin page to display all of the users list
Route::get('/admin', [UserController::class, 'adminUsersList'])->name('admin');

// Route to edit a specific user selected in the list
Route::get('/admin/edit/{id}', [UserController::class, 'adminUserEdit'])->name('edit-user');

// Route to update the user information
Route::post('/admin/edit/{id}', [UserController::class, 'adminUserUpdate']);

// Route to delete specific user
Route::get('/admin/delete/{id}', [UserController::class, 'adminUserDelete'])->name('delete-user');


// Route to show a specific alert details
Route::get('/alert-edit/{id}', [AlertController::class, 'alert_edit_show'])->name('alert-edit');

Route::post('/alert-edit/{id}', [AlertController::class, 'alert_edit_submit'])->name('alert-submit');

// Route to the Contact page.
Route::get('/contact', [ContactUsController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactUsController::class, 'submitContactForm'])->name('contact.submit');



Route::get("/home", [AlertController::class, 'homePlaylist'])->name("home");

//route to the home page logged out
Route::get('/', function () {
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


// Route to submit the User modification
Route::post('user', [UserController::class, 'modification-submit'])->name('modification-submit');


//Route to get the api
Route::get('/alerts', [AlertController::class, 'showAlerts'])->name('alerts');


Route::get("client-settings/", [AlertController::class, 'alertPlaylist'])->name("client-settings");

Route::get('client-settings-edit/{id}', [UserController::class, 'editClientSettingsShow'])->name('client-settings-edit');
Route::post('client-settings-edit/{id}', [UserController::class, 'editClientSettingSubmit'])->name('client-settings-edit');

// Route to add to the playlist a specific alert
Route::get('/add-alert/{alert_id}', [AlertController::class, 'addAlert'])->name('add-alert');

//route of login,register,forgot-password, reset-password, logout
require __DIR__ . '/myauth.php';
