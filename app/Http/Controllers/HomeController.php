<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index ()
    {
        $posts      = Post::latest()->paginate(5);
        $categories = Category::all();

        return view('front.home' , compact('posts' , 'categories'));
    }

    public function post ( $slug )
    {

        $post       = Post::findBySlugOrFail($slug);
        $comments   = $post->comments->where('is_active' , 1);
        $categories = Category::all();

        return view('post' , compact('post' , 'comments' , 'categories'));

    }

    public function logout ()
    {
        Auth::logout();
        return redirect()->back();
    }
}
