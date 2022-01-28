<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Zipcontroller;
use App\Http\Controllers\EmpleadosController;


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


Route::get('/students',[StudentController::class, 'fetchStudents']);
Route::get('/add-post',[PostController::class, 'addPost']);
Route::post('/create-post',[PostController::class, 'createPost'])->name('post.create');
Route::get('/posts',[PostController::class,'getPosts']);
Route::get('/posts/{id}',[PostController::class, 'getPostById']);
Route::get('/delete-posts/{id}',[PostController::class, 'deletePost']);
Route::get('/edit-post/{id}',[PostController::class, 'editPost']);
Route::post('/update-post',[PostController::class, 'updatePost'])->name('post.update');


Route::get('/add-user',[UserController::class, 'insertRecord']);
Route::get('/get-phone/{id}',[UserController::class, 'fetchPhoneByUser']);


Route::get('/add-postComment', [PostController::class, 'addPostComment']);
Route::get('/add-comment/{id}',[PostController::class, 'addComment']);
Route::get('/view-comment/{id}',[PostController::class, 'getComentByPost']);

Route::get('/add-role',[RoleController::class, 'addRole']);
Route::get('/add-userRole',[RoleController::class,'addUser']);
Route::get('/role-by-user/{id}',[RoleController::class, 'getAllRolesByUser']);
Route::get('/user-by-role/{id}',[RoleController::class, 'getAllUserByRole']);

Route::get('/employee-add', [EmployeeController::class, 'addEmployee']);

//excel
Route::get('/employee-xlsx',[EmployeeController::class, 'exportIntoExcel']);
Route::get('/employee-csv', [EmployeeController::class, 'exportIntoCSV']);


//employeee
Route::get('/view-employee', [EmpController::class, 'getAllEmployees']);
Route::get('/download-pdf',[EmpController::class, 'downloadPDF'] );

//import
Route::get('/importar-datos', [EmployeeController::class,'importFrom']);
Route::post('/import',[EmployeeController::class, 'import'])->name('employee.import');


//resize image
Route::get('/resize-image', [ImageController::class, 'resizeImage']);
Route::post('/resize-images',[ImageController::class, 'resizeImageSubmit'])->name('image.resize');


//DropZone
Route::get('/dropzone', [DropzoneController::class,'dropZone']);
Route::post('/dropzone-store',[DropzoneController::class, 'dropZoneStore'])->name('dropzone-store');

//gallery
Route::get('/gallery',[GalleryController::class, 'gallery']);


//editor
Route::get('/editor',[EditorController::class, 'editor']);




//Estudiantes
Route::get('/add-student', [EstudianteController::class, 'addStudent']);
Route::post('add-student',[EstudianteController::class, 'storeStudent'])->name('student.store');
Route::get('/all-student',[EstudianteController::class, 'allStudent']);
Route::get('/edit-student/{id}',[EstudianteController::class, 'editStudent']);
Route::post('/update-student',[EstudianteController::class ,'updateStudent'])->name('student.edit');
Route::get('/delete-student/{id}',[EstudianteController::class, 'deleteStudent']);



//Contact-us
Route::get('/contact-us',[ContactController::class, 'contact']);
Route::post('/send-email',[ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/testfunction',[TestController::class, 'getFirstLastName']);



//sear practice
Route::get('/insert-product',[ProductController::class, 'addProduct']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/autocomplete',[ProductController::class, 'autocomplete'])->name('autocomplete');



//ZIP
Route::get('/zip', [Zipcontroller::class, 'zipFile']);


//empleados
Route::get('/empleados',[EmpleadosController::class, 'index']);