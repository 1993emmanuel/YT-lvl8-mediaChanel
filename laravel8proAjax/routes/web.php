<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EstudiantesController;

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
});

Route::get('/students',[StudentController::class, 'index']);
Route::post('/add-student',[StudentController::class, 'addStudent'])->name('student.add');
Route::get('/student/{id}',[StudentController::class, 'getStudentById']);
Route::put('/student', [StudentController::class , 'updateStudent'])->name('student.update');
Route::delete('/student/{id}',[StudentController::class, 'deleteStudent']);
Route::delete('/select-students',[StudentController::class, 'deleteCheckedStudent'])->name('student.deleteSelected');


//register
Route::get('/register',[AuthController::class, 'index']);
Route::post('/register',[AuthController::class, 'registerSubmit'])->name('auth.registerSubmit');


//POSTS
Route::get('/posts',[PostController::class, 'index']);


//Chart
Route::get('/chart',[ChartController::class, 'index']);

//multiStep
Route::get('/form',[FormController::class , 'index']);
Route::post('/form',[FormController::class, 'formSubmit'])->name('form.formSubmit');


//Add EStudiante
Route::get('/add-estudiante',[EstudiantesController::class , 'addEstudiantes']);
Route::get('/all-estudiantes',[EstudiantesController::class, 'getAllEstudiantes']);