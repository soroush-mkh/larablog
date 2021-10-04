<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $comments = Comment::all();

        return view('admin.comments.index' , compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store ( Request $request )
    {
        $user = Auth::user();

        $data = [
            'post_id' => $request->post_id ,
            'author'  => $user->name ,
            'email'   => $user->email ,
            'photo'   => $user->profile_photo_path ,
            'body'    => $request->body ,
        ];

        Comment::create($data);
        $request->session()->flash('saved_comment' , 'نظر شما ثبت و در انتظار تایید ادمین قرار گرفت.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show ( $id )
    {
        $post     = Post::findOrFail($id);
        $comments = $post->comments;

        return view('admin.comments.show' , compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update ( Request $request , $id )
    {
        Comment::findOrFail($id)->update($request->all());
        Session::flash('updated_comment' , 'تغییر وضعیت نظر انجام شد.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ( $id )
    {
        Comment::findOrFail($id)->delete();
        Session::flash('deleted_comment' , 'حذف نظر با موفقیت انجام شد.');
        return redirect()->back();
    }
}
