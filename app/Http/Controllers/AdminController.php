<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        $postCount       = Post::count();
        $categoriesCount = Category::count();
        $commentsCount   = Comment::count();

        return view('admin.index' , compact('postCount' , 'categoriesCount' , 'commentsCount'));
    }
}
