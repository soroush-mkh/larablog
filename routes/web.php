<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminMediaController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/' , function ()
{
    return view('welcome');
});

/*Route::middleware([ 'auth:sanctum' , 'verified' ])->get('/dashboard' , function ()
{
    return view('dashboard');
})->name('dashboard');*/

/*Route::middleware([ 'auth:sanctum' , 'verified' ])->get('/dashboard' , function ()
{
    return view('dashboard');
});*/

/*Route::get('/admin' , function ()
{
    return view('admin.index');
});*/

Route::middleware([ AdminMiddleware::class ])->group(function ()
{
    Route::get('/admin' , function ()
    {
        return view('admin.index');

    })->name('admin.index');

    Route::resource('admin/users' , AdminUsersController::class)->names('admin.users');

    Route::resource('admin/posts' , AdminPostsController::class)->names('admin.posts');

    Route::resource('admin/categories' , AdminCategoryController::class)->names('admin.categories');

    Route::get('admin/media/index' , [ AdminMediaController::class , 'index' ])->name('admin.media.index');
    Route::get('admin/media/upload' , [ AdminMediaController::class , 'upload' ])->name('admin.media.upload');
    Route::post('admin/media/store' , [ AdminMediaController::class , 'store' ])->name('admin.media.store');
    Route::delete('admin/media/{id}/destroy' , [ AdminMediaController::class , 'destroy' ])->name('admin.media.destroy');
});



