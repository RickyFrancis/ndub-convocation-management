<?php

use App\Http\Controllers\ProfileController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
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
});

// Route::get('/dashboard', function () {
//     //return view('dashboard');

//     return view('admin.dashboard');

// })->middleware(['auth'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    //return view('dashboard');
    return view('admin.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
Route::get('dashboard/user/information/edit/{id}', [ProfileController::class, 'edit'])->name('edit_user_information');
Route::post('dashboard/user/information/update', [ProfileController::class, 'update'])->name('update_user_information');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/send-test-email', function () {
    Mail::to('ishan@ndub.edu.bd')->send(new WelcomeEmail());

    return 'Email sent successfully!';
});

require __DIR__ . '/auth.php';