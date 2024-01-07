<?php

use App\Http\Controllers\ConvocationRegistrationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SecondProgramRegistrationController;
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
//     return view('admin.dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Convocation Registration (First Program)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ConvocationRegistrationController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/student/information/edit/{id}', [ConvocationRegistrationController::class, 'edit'])->name('edit_student_information');
    Route::post('dashboard/student/information/update', [ConvocationRegistrationController::class, 'update'])->name('update_student_information');
    Route::get('dashboard/student/photo/upload/{id}', [ConvocationRegistrationController::class, 'photoUpload'])->name('student_photo_upload');
    Route::post('dashboard/student/photo/upload/update', [ConvocationRegistrationController::class, 'photoUpdate'])->name('student_photo_update');
});
// Convocation Registration (Second Program - If Applicable)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard/student/second-registration/{id}', [SecondProgramRegistrationController::class, 'add'])->name('student_second_registration');
    Route::post('dashboard/student/second-registration/submit', [SecondProgramRegistrationController::class, 'submit'])->name('student_second_registration_submit');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/send-test-email', function () {
    Mail::to('ishan@ndub.edu.bd')->send(new WelcomeEmail());

    return 'Email sent successfully!';
});

require __DIR__ . '/auth.php';