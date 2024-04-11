<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\User\UserController;
    use App\Http\Controllers\Subject\SubjectController;

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
        return view('auth/login');
    });

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // user
    Route::controller(UserController::class)->group(function () {
        Route::get('student', 'student')->name('student');
        Route::get('staff', 'staff')->name('staff');
    })->middleware('auth');

    // subject
    Route::controller(SubjectController::class)->group(function () {
        Route::get('subject/index', 'index')->name('subject/index');
        Route::post('subject/registerSubject', 'registerSubject')->name('subject/registerSubject');
    })->middleware('auth');
