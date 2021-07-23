<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CustomAuthController,ExamController};
use App\Http\Controllers\teacher\{AnswerController,QuestionController};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Auth
Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::group(['middleware' => 'auth'], function() {

    //Teacher
    Route::resource('question', QuestionController::class);
    Route::resource('answer', AnswerController::class);


    //Student
    Route::get('exam', [ExamController::class, 'appearExam'])->name('exam.appear');
    Route::post('exam', [ExamController::class, 'submitExam'])->name('exam.submit');
    Route::get('result', [ExamController::class, 'result'])->name('exam.result');
});

