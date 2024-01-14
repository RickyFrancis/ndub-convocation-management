<?php

use App\Http\Controllers\ConvocationRegistrationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SecondProgramRegistrationController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;
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

// Route::get('/pdf', function () {
//     return view('student.pdf.registration-form');
// });

// Route::get('/dashboard', function () {
//     //return view('dashboard');
//     return view('admin.dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Student
// Convocation Registration (First Program)
Route::middleware(['auth', 'verified', 'student'])->group(function () {
    Route::get('/dashboard', [ConvocationRegistrationController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/student/information/edit/{id}', [ConvocationRegistrationController::class, 'edit'])->name('edit_student_information');
    Route::post('dashboard/student/information/update', [ConvocationRegistrationController::class, 'update'])->name('update_student_information');
    Route::get('dashboard/student/photo/upload/{id}', [ConvocationRegistrationController::class, 'photoUpload'])->name('student_photo_upload');
    Route::post('dashboard/student/photo/upload/update', [ConvocationRegistrationController::class, 'photoUpdate'])->name('student_photo_update');
    Route::post('dashboard/student/convocation-registration', [ConvocationRegistrationController::class, 'formSubmit'])->name('student_form_submit');
    Route::get('dashboard/registration-form-pdf', [ConvocationRegistrationController::class, 'registrationFormPDF'])->name('registrationFormPDF');
    Route::get('dashboard/student-copy-pdf', [ConvocationRegistrationController::class, 'studentCopyPDF'])->name('studentCopyPDF');
});
// Convocation Registration (Second Program - If Applicable)
Route::middleware(['auth', 'verified', 'student'])->group(function () {
    Route::get('dashboard/student/second-registration/{id}', [SecondProgramRegistrationController::class, 'add'])->name('student_second_registration');
    Route::post('dashboard/student/second-registration/submit', [SecondProgramRegistrationController::class, 'submit'])->name('student_second_registration_submit');
    Route::get('dashboard/student/second-registration/edit/{id}', [SecondProgramRegistrationController::class, 'edit'])->name('edit_second_registration');
    Route::post('dashboard/student/second-registration/update', [SecondProgramRegistrationController::class, 'update'])->name('update_second_registration');
});
//Support Ticket
Route::get('support/ticket', [SupportTicketController::class, 'add'])->name('add_support_ticket');
Route::post('support/ticket/submit', [SupportTicketController::class, 'submit'])->name('submit_ticket');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Admin
// 
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    //Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/admin/all-student', [AdminController::class, 'allStudent'])->name('all_student');
    //Route::get('dashboard/admin/add/student', [AdminController::class, 'addStudent'])->name('add_student');
    //Route::post('dashboard/admin/add/student/submit', [AdminController::class, 'submitStudent'])->name('submit_student');
    Route::get('dashboard/admin/student-information/view/{id}', [AdminController::class, 'viewStudent'])->name('admin_view_student_information');
    Route::get('dashboard/admin/student-information/edit/{id}', [AdminController::class, 'editStudent'])->name('admin_edit_student_information');
    Route::post('dashboard/admin/student-information/update', [AdminController::class, 'updateStudent'])->name('admin_update_student_information');
    Route::get('dashboard/admin/student-information/edit/email/{id}', [AdminController::class, 'editStudentEmail'])->name('admin_edit_student_email');
    Route::post('dashboard/admin/student-information/email/update', [AdminController::class, 'updateStudentEmail'])->name('admin_update_student_email');
    //Route::get('dashboard/student/photo/upload/{id}', [AdminController::class, 'photoUpload'])->name('student_photo_upload');
    //Route::post('dashboard/student/photo/upload/update', [AdminController::class, 'photoUpdate'])->name('student_photo_update');
    Route::get('dashboard/registration-form-pdf/{id}', [PdfController::class, 'registrationFormPDF'])->name('adminRegistrationFormPDF');
    Route::get('dashboard/student-copy-pdf/{id}', [PdfController::class, 'studentCopyPDF'])->name('adminStudentCopyPDF');
    Route::get('dashboard/admin/support/ticket/all', [SupportTicketController::class, 'allSupportTicket'])->name('all_support_ticket');
});

Route::get('/send-test-email', function () {
    Mail::to('ishan@ndub.edu.bd')->send(new WelcomeEmail());

    return 'Email sent successfully!';
});

require __DIR__ . '/auth.php';