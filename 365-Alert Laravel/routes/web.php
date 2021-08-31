<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AlertsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

// Route to the admin page

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

// Route to the show the login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route to submit the login form
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');


// Route to the forgotten password page
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->middleware('guest')->name('password.request');


// Route to submit the forgotten password form
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

//route to reset-password
Route::get('/reset-password/{token}', function ($token) {
    return view('reset-password', ['token' => $token]);
})->middleware('guest')->name('password.request');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


// Route to the procedures
Route::get('/procedures', function () {
    return view('procedures');
})->name('procedures');

// Route to the Register
Route::get('/register', function () {
    return view('register');
})->name('register');

//Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

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
Route::get('alerts', [AlertsController::class, 'getApi'])->name('alerts');
