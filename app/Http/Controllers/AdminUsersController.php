<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $users = User::paginate(10);

        return view('admin.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        $roles = Role::all();

        return view('admin.users.create' , compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store ( UserRequest $request )
    {
        if ( trim($request->password) == '' )
        {
            $input = $request->except('password');
        }
        else
        {
            $input               = $request->all();
            $input[ 'password' ] = bcrypt($request->password);
        }


        if ( $file = $request->file('profile_photo') )
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('profile-photos' , $name);
            $input[ 'profile_photo_path' ] = 'profile-photos/' . $name;
        }

        User::create($input);

        Session::flash('saved_user' , 'حساب کاربری با موفقیت ساخته شد.');

        return redirect()->route('admin.users.index');


        /*$user = User::create($request->all());

        return redirect()->back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show ( $id )
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit ( $id )
    {
        $user  = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit' , compact('roles' , 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public
    function update ( UserEditRequest $request , $id )
    {

        if ( trim($request->password) == '' )
        {
            $input = $request->except('password');
        }
        else
        {
            $input               = $request->all();
            $input[ 'password' ] = bcrypt($request->password);
        }

        $user = User::findOrFail($id);


        if ( $file = $request->file('profile_photo') )
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('profile-photos' , $name);
            $input[ 'profile_photo_path' ] = 'profile-photos/' . $name;
        }

        $user->update($input);

        Session::flash('updated_user' , 'اطلاعات کاربر تغییر یافت.');

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy ( $id )
    {
        $user = User::findOrFail($id);

        unlink(public_path() . '/' . $user->profile_photo_path);

        $user->delete();

        Session::flash('deleted_user' , 'کاربر مورد نظر حذف شد.');

        return redirect()->route('admin.users.index');
    }
}
