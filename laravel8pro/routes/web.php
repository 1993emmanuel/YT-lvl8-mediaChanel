<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;

use App\Http\Controllers\MailController;

use App\PaymentGateway\Payment;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class, 'index'])->name('product.index');

// Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/posts',[ClientController::class, 'getAllPosts'])->name('posts.getAllPosts');

Route::get('/posts/{id}',[ClientController::class, 'getPostById'])->name('posts.getPostById');

Route::get('/add-post',[ClientController::class, 'addPost'])->name('posts.addPost');

Route::get('/update-post',[ClientController::class, 'updatePost'])->name('posts.updatePost');

Route::get('delete-post/{id}',[ClientController::class, 'deletePost'])->name('posts.deletePost');

Route::get('/fluent', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get',[SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set',[SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove',[SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts',[PostController::class, 'getAllPost'])->name('post.getallpost');

Route::get('/add-post',[PostController::class, 'addPost'])->name('post.add');

Route::post('/add-post',[PostController::class, 'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}',[PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('/delete-post/{id}',[PostController::class, 'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}',[PostController::class, 'editPost'])->name('post.edit');

Route::post('/update-post/',[PostController::class, 'updatePost'])->name('post.update');

Route::get('/inner-join',[PostController::class, 'innerJoinCaluse'])->name('post.innerjoin');

Route::get('/left-join',[PostController::class, 'leftJoin'])->name('post.leftjoin');

Route::get('/right-join',[PostController::class, 'rightJoin'])->name('post.rightjoin');

Route::get('all-post-model',[PostController::class, 'getAllPostUsingModel'])->name('post.allpostmodel');

Route::get('/prueba', function(){
	return view('prueba');
});

Route::get('/home',function(){
	return view('index');
});

Route::get('/about',function(){
	return view('about');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/users',[PaginationController::class, 'allUser'])->name('users.allUser');

Route::get('/upload',[UploadController::class, 'uploadForm'])->name('upload.uploadform');

Route::post('/upload',[UploadController::class, 'uploadFile'])->name('upload.uploadfile');

Route::get('/payment',function(){
	return Payment::process();
});

Route::get('/send-mail',[MailController::class, 'sendEmail']);

// Route::get('/user', function(){
// 	return view('user');
// });