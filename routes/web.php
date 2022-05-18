<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ChatController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TagsController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CommentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/',[PageController::class,'home']);
//Route::prefix('admin')->middleware(['auth', ''])->group(function(){
Route::get('',[PageController::class,'home'])->name('home');
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('blog',[PageController::class,'blog'])->name('blog');
Route::get('contact-us',[PageController::class,'contactUs'])->name('contact-us');

Route::get('/single-page/{id}',[PageController::class,'single'])->name('single');
Route::get('view-category/{id}',[PageController::class,'viewcategory'])->name('view-category');
Route::get('view-tag/{id}',[PageController::class,'viewtag'])->name('view-tag');
Route::post('send-message',[PageController::class,'sendMessage'])->name('send-message');
Route::post('comments-message',[PageController::class,'chatMessage'])->name('chat-message');

Route::resource('comments',CommentController::class)->except(['create','store','edit','update'])->middleware(['auth']);
Route::resource('categories',CategoryController::class)->middleware(['auth']);
Route::resource('tags',TagsController::class)->middleware(['auth']);
Route::resource('posts',PostController::class)->except('show')->middleware(['auth']);
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware(['auth']);
Route::resource('setting',SettingController::class)->except(['show','destroy','create','store'])->middleware(['auth']);
Route::resource('contact',ContactController::class)->except(['edit','update','create','store'])->middleware(['auth']);
require __DIR__.'/auth.php';
Route::get('login',[AuthenticatedSessionController::class,'create'])->name('login');
// });
