<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMediaController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\CommentRepliesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCommentController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


/*Route::middleware([ 'auth:sanctum' , 'verified' ])->get('/dashboard' , function ()
{
    return view('dashboard');
})->name('dashboard');*/


Route::get('/' , [ HomeController::class , 'index' ])->name('home-page');
Route::post('/search' , [ HomeController::class , 'search' ])->name('home.search');
Route::get('/search/{categoryName}' , [ HomeController::class , 'category' ])->name('home.category');

/*_____ OPEN FOR ALL USERS _____*/
Route::get('/post/{id}' , [ HomeController::class , 'post' ])->name('home.post');

/*_____ OPEN JUST FOR LOGED IN USERS _____*/
Route::middleware([ Authenticate::class ])->group(function ()
{
    Route::post('admin/comments/store' , [ PostCommentController::class , 'store' ])->name('admin.comments.store');

    Route::post('comment/reply' , [ CommentRepliesController::class , 'createReply' ])->name('comment.replies.createReply');

});

/*_____ OPEN JUST FOR ADMIN USERS _____*/
Route::middleware([ AdminMiddleware::class ])->group(function ()
{
    Route::get('/admin' , [ AdminController::class , 'index' ])->name('admin.index');

    Route::resource('admin/users' , AdminUsersController::class)->names('admin.users');

    Route::resource('admin/posts' , AdminPostsController::class)->names('admin.posts');

    Route::resource('admin/categories' , AdminCategoryController::class)->names('admin.categories');

    Route::get('admin/media/index' , [ AdminMediaController::class , 'index' ])->name('admin.media.index');
    Route::get('admin/media/upload' , [ AdminMediaController::class , 'upload' ])->name('admin.media.upload');
    Route::post('admin/media/store' , [ AdminMediaController::class , 'store' ])->name('admin.media.store');
    Route::delete('admin/media/{id}/destroy' , [ AdminMediaController::class , 'destroy' ])->name('admin.media.destroy');


    Route::get('admin/comments' , [ PostCommentController::class , 'index' ])->name('admin.comments.index');
    Route::get('admin/comments/show' , [ PostCommentController::class , 'show' ])->name('admin.comments.show');
    Route::patch('admin/comments/update/{id}' , [ PostCommentController::class , 'update' ])->name('admin.comments.update');
    Route::delete('admin/comments/destroy/{id}' , [ PostCommentController::class , 'destroy' ])->name('admin.comments.destroy');


    Route::resource('admin/comment/replies' , CommentRepliesController::class)->names('comment.replies');
});

Route::group([ 'prefix' => 'laravel-filemanager' , 'middleware' => [ 'web' , 'AdminMiddleware' , 'auth' ] ] , function ()
{
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
