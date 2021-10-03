<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $categories = Category::all();

        return view('admin.categories.index' , compact('categories'));
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
    public function store ( CategoryCreateRequest $request )
    {
        Category::create($request->all());
        Session::flash('saved_category' , 'دسته بندی مورد نظر اضافه شد.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show ( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ( $id )
    {
        $categories = Category::all();
        $category   = Category::findOrFail($id);
        return view('admin.categories.edit' , compact('categories' , 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update ( CategoryCreateRequest $request , $id )
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        Session::flash('updated_category' , 'دسته بندی مورد نظر ویرایش شد.');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ( $id )
    {
        Category::findOrFail($id)->delete();
        Session::flash('deleted_category' , 'دسته بندی مورد نظر حذف شد.');
        return redirect()->route('admin.categories.index');
    }
}
