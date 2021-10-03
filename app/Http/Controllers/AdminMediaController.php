<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    public function index ()
    {
        $photos = Photo::all();
        return view('admin.media.index' , compact('photos'));
    }

    public function upload ()
    {
        return view('admin.media.upload');
    }

    public function store ( Request $request )
    {
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move(public_path('images') , $name);
        Photo::create([ 'file' => $name ]);
    }

    public function destroy ( $id )
    {
        $photo = Photo::findOrFail($id);
        unlink(public_path('images/') . $photo->file);
        $photo->delete();
        return redirect()->route('admin.media.index');
    }
}
