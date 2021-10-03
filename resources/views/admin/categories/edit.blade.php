@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_category'))
        <div class="unset rounded">
            <p class="bg-danger m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing:
            border-box;
             margin: 10px">
                {{session('deleted_category')}}
            </p>
        </div>
    @elseif(Session::has('updated_category'))
        <div class="unset rounded">
            <p class="bg-info m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('updated_category')}}
            </p>
        </div>
    @elseif(Session::has('saved_category'))
        <div class="unset rounded">
            <p class="bg-success m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('saved_category')}}
            </p>
        </div>
    @endif

    <h1 class="page-header">دسته بندی ها</h1>


    <div class="col-sm-6">

    </div>

    <div class="col-sm-6" style="margin: unset; padding: unset">
        <form method="post"
              action="{{route('admin.categories.update',$category->id)}}"
              class="col-sm-8 mt-3"
              style="float: unset;padding: unset">

            @csrf

            {{method_field('PATCH')}}

            <section class="col-12">
                <div class="form-group">
                    <label for="name">ویرایش دسته بندی</label>
                    <input type="text"
                           placeholder="نام دسته بندی مورد نظر را وارد کنید..."
                           class="form-control form-control-sm"
                           name="name"
                           id="name"
                           value="{{old('name',$category->name)}}">
                </div>
            </section>

            <section class="my-4 mx-4">
                <button type="submit" class="btn btn-info btn-sm form-group">ویرایش</button>
            </section>

        </form>

        <form method="POST"
              action="{{route('admin.categories.destroy',$category->id)}}"
              class="col-sm-8 mt-3"
              style="float: unset;padding: unset;margin: unset">
            @csrf
            {{method_field('DELETE')}}
            <section style="margin: unset;padding: unset; margin-right: 10px;margin-top: 10px;margin-right: 5px">
                <button type="submit" class="btn btn-danger btn-sm">حذف</button>
            </section>
        </form>

        <section style="margin: unset;padding: unset; margin-right: 10px;margin-top: 10px;margin-right: 4px">
            <a href="{{route('admin.categories.index')}}" class="btn btn-dark btn-sm">بازگشت</a>
        </section>

        <div style="all: unset" class="col-md-12 col-12">
            @include('includes.form_error')
        </div>

    </div>


@endsection
