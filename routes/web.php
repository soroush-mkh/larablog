<?php

use App\Http\Controllers\AdminCategoryController;
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
});



