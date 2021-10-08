<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Null_;

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

    public function search ( Request $request )
    {
        $searchWord = $request->searchWord;
        $result     = Post::where('title' , 'LIKE' , '%' . $searchWord . '%');
        $posts      = $result->latest()->paginate(5);

        $categories = Category::all();


        if ( $result->first() )
            Session::flash('search_found' , 'جستجو با موفقیت انجام شد.');
        else
            Session::flash('search_not_found' , 'نتیجه ای برای کلمه جستجو شده یافت نشد.');


        return view('front.home' , compact('posts' , 'categories'));
    }

    public function category ( Request $request )
    {

        $categoryName = $request->categoryName;

        $posts      = Category::Where('name' , 'LIKE' , $categoryName)->first()->posts()->latest()->paginate(5);
        $categories = Category::all();

        return view('front.home' , compact('posts' , 'categories'));
    }
}
