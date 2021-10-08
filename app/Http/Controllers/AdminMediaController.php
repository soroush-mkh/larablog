<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\UploadedPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMediaController extends Controller
{
    public function index ()
    {
        $photos = UploadedPhoto::all();
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
        $file->move(public_path('storage/photos/shares') , $name);
        UploadedPhoto::create([ 'file' => $name ]);
    }

    public function destroy ( $id )
    {
        $photo = UploadedPhoto::findOrFail($id);
        unlink(public_path('storage/photos/shares/') . $photo->file);
        $photo->forceDelete();
        Session::flash('deleted_media' , 'حذف رسانه با موفقیت انجام شد.');
        return redirect()->route('admin.media.index');
    }
}
