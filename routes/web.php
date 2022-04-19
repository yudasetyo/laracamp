<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
<<<<<<< HEAD
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
=======
>>>>>>> b739979e9789d4a54ccddc4a0c5b17db8e334a51

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
    return view('welcome');
})->name('welcome');

Route::get('login', function () {
    return view('login');
})->name('login');

// Socialite Route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user-login-google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user-google-callback');

Route::middleware(['auth'])->group(function () {
    # Checkout Routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

    #Dashboard Routes
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
