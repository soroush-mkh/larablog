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
        <table class="table table-striped">
            <thead>
            <tr>
                <th>شماره دسته</th>
                <th>عنوان دسته</th>
                <th>زمان ساخت</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td style="vertical-align: middle;">{{$category->id}}</td>
                        <td style="vertical-align: middle;">
                            <a href="{{route('admin.categories.edit',$category->id)}}">{{$category->name}}</a>
                        </td>
                        <td style="vertical-align: middle;">{{$category->created_at->diffForHumans()}}</td>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <div class="col-sm-6" style="margin: unset; padding: unset">
        <form method="post"
              action="{{route('admin.categories.store')}}"
              class="col-sm-8 mt-3"
              style="float: unset;padding: unset"
              enctype="multipart/form-data">

            @csrf

            <section class="col-12">
                <div class="form-group">
                    <label for="name">ایجاد دسته بندی جدید</label>
                    <input type="text"
                           placeholder="نام دسته بندی مورد نظر را وارد کنید..."
                           class="form-control form-control-sm"
                           name="name"
                           id="name"
                           value="{{old('name')}}">
                </div>
            </section>

            <section class="my-4 mx-4">
                <button class="btn btn-primary btn-sm">ثبت</button>
            </section>

        </form>

        <div style="all: unset">
            @include('includes.form_error')
        </div>

    </div>


@endsection
