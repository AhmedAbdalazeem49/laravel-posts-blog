<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\posts;
use App\Http\Controllers\signin;
use App\Http\Controllers\Signup;
use App\Http\Controllers\testController;
use App\Http\Controllers\testController1;
use App\Http\Controllers\testController2;
use App\Http\Controllers\testController3;
use Illuminate\Auth\Notifications\ResetPassword;
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
route::get('/posts',[postController::class,'index'])->name('posts.index');

route::get('/posts/create',[postController::class,'create'])->name('posts.create');

route::post('/posts',[postController::class,'store'])->name('posts.store');

route::get('/posts/{post}',[postController::class,'show'])->name('posts.show');

route::get('/posts/{post}/edit',[postController::class,'edit'])->name('posts.edit');

route::put('/posts/{post}',[postController::class,'update'])->name('posts.update');

route::delete('/posts/{post}',[postController::class,'destroy']) ->name
('posts.destroy');

////////////
////////////////////////////////////////////////////////// 