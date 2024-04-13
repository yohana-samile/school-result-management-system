<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\User\UserController;
    use App\Http\Controllers\Subject\SubjectController;
    use App\Http\Controllers\Utilities\UtilitieController;
    use App\Http\Controllers\Result\ResultController;

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
        Route::post('staff/registerTeacher', 'registerTeacher')->name('staff/registerTeacher');
        Route::post('staff/registerStudent', 'registerStudent')->name('staff/registerStudent');
    })->middleware('auth');

    // subject
    Route::controller(SubjectController::class)->group(function () {
        Route::get('subject/index', 'index')->name('subject/index');
        Route::post('subject/registerSubject', 'registerSubject')->name('subject/registerSubject');
    })->middleware('auth');

    // utilities
    Route::controller(UtilitieController::class)->group(function () {
        Route::get('utilities/grade', 'grade')->name('utilities/grade');
        Route::get('utilities/education_qualification', 'education_qualification')->name('utilities/education_qualification');
        Route::get('utilities/form', 'form')->name('utilities/form');
        Route::get('utilities/semester', 'semester')->name('utilities/semester');
        Route::post('utilities/registerGrade', 'registerGrade')->name('subject/registerGrade');
    })->middleware('auth');

    // Results
    Route::controller(ResultController::class)->group(function () {
        Route::get('result/index/{id}', 'index');
        Route::post('result/submitStudentResult/{id}', 'submitStudentResult')->name('result/submitStudentResult/{id}');
        Route::get('result/result_preview/{id}', 'result_preview')->name('result/result_preview/{id}');
        Route::get('result/my_result', 'my_result')->name('result/my_result');
    })->middleware('auth');
