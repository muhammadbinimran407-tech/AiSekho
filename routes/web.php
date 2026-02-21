<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/


Route::get('/add-to-cart', [CourseController::class, 'addToCart'])->name('add-to-cart');
Route::get('/contact-us', [CourseController::class, 'contactPage'])->name('contact-us');
Route::get('/about', [CourseController::class, 'aboutPage'])->name('about');
Route::get('/', [CourseController::class, 'homePage'])->name('home');
Route::get('/teachers', [CourseController::class, 'allTeachers'])->name('teachers');
Route::get('/teacher-detail', [CourseController::class, 'singleTeacher'])->name('teacher-detail');
Route::get('/course-detail', [CourseController::class, 'singleCourse'])->name('course-detail');

/*
|--------------------------------------------------------------------------
| Admin Routes
|-------------------------------------------------  -------------------------
*/

Route::prefix('admin')->middleware(['auth','verified'])->group(function(){

    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');

    // Courses
    Route::get('/courses', [adminController::class, 'courseIndex'])->name('admin.courses.index');
    Route::get('/courses/create', [adminController::class, 'courseCreate'])->name('admin.courses.create');
    Route::post('/courses', [adminController::class, 'courseStore'])->name('admin.courses.store');
    Route::get('/courses/show', [adminController::class, 'courseShow'])->name('admin.courses.show');
    Route::get('/courses/index', [adminController::class, 'courseEdit'])->name('admin.courses.edit');

    // Students
    Route::get('/students', [adminController::class, 'studentIndex'])->name('admin.students.index');
   
    Route::post('/students', [adminController::class, 'studentStore'])->name('admin.students.store');
    Route::get('/students/show', [adminController::class, 'studentShow'])->name('admin.students.show');
    Route::get('/students/index', [adminController::class, 'studentEdit'])->name('admin.students.index');

    // Teachers
    Route::get('/teachers', [adminController::class, 'teacherIndex'])->name('admin.teachers.index');
    Route::get('/teachers/create', [adminController::class, 'teacherCreate'])->name('admin.teachers.create');
    Route::post('/teachers', [adminController::class, 'teacherStore'])->name('admin.teachers.store');
    Route::get('/teachers/show', [adminController::class, 'teacherShow'])->name('admin.teachers.show');
    Route::get('/teachers/index', [adminController::class, 'teacherEdit'])->name('admin.teachers.index');
});

<<<<<<< HEAD

// Public dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> 11e90928a6a85c17c259bd28f2d043b28eb04ac2

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
