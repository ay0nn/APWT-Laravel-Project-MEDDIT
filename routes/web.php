<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifySession;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['middleware'=>['Ipcheck']], function(){
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'verify']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/signingithub', [App\Http\Controllers\LoginController::class, 'loginwithgithub'])->name('signingithub');
Route::get('/gtrdrct', [App\Http\Controllers\LoginController::class, 'gtredirect']);

Route::group(['middleware'=>['VerifySession']], function(){

Route::get('/admin/home', [App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
Route::get('/admin/add', [App\Http\Controllers\AdminController::class,'addadmin'])->name('admin.add');
Route::post('/admin/add', [App\Http\Controllers\AdminController::class,'createadmin'])->name('admin.add');
Route::get('/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('user.delete');

Route::get('/admin/userpdf', [App\Http\Controllers\UserController::class,'userpdf'])->name('user.pdf');
Route::get('/admin/userlist',[App\Http\Controllers\UserController::class,'review'])->name('review');
Route::get('/alluser', [App\Http\Controllers\UserController::class,'index'])->name('alluser');
Route::get('/live_search/action', [App\Http\Controllers\UserController::class,'action'])->name('live_search.action');

Route::get('/admin/postlist',[App\Http\Controllers\PostController::class,'postNode'])->name('post.postNode');
Route::get('/allposts', [App\Http\Controllers\PostController::class,'index'])->name('allposts');
Route::get('/allposts/action', [App\Http\Controllers\PostController::class,'action'])->name('allposts.action');

Route::get('/allcomments', [App\Http\Controllers\CommentController::class,'index'])->name('allcomment');
Route::get('/allcomment/action', [App\Http\Controllers\CommentController::class,'action'])->name('allcomment.action');

Route::get('/addnotice', [App\Http\Controllers\AdminController::class,'notice'])->name('addnotice');
Route::post('/submit', [App\Http\Controllers\AdminController::class,'createNotice'])->name('submit');
Route::get('/notice/delete/{id}',[App\Http\Controllers\AdminController::class,'delete'])->name('notice.delete');

Route::get('/admin/allnotice',[App\Http\Controllers\UserController::class,'noticereviews'])->name('notice.review');
Route::get('/noticelist', [App\Http\Controllers\AdminController::class, 'noticelist'])->name('noticelist');
Route::get('/allnotice', [App\Http\Controllers\AdminController::class,'noticeindex']);
Route::get('/admin/updf', [App\Http\Controllers\AdminController::class,'updf'])->name('updf');

});
});