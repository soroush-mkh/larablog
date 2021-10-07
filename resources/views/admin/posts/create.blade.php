@extends('layouts.admin')


@section('content')
    @include('includes.tinyeditor')

    <h1 class="page-header">ساخت پست جدید</h1>


    <form method="post"
          action="{{route('admin.posts.store')}}"
          class="col-sm-12 col-md-12"
          style="float: unset"
          enctype="multipart/form-data">

        @csrf

        <section class="row">

            <div style="display: flex;">

                <section class="col-12 col-md-6 my-2">
                    <div class="form-group">
                        <label for="title">عنوان پست</label>
                        <input type="text"
                               placeholder="لطفا عنوان پست را وارد نمایید..."
                               class="form-control form-control-sm"
                               name="title"
                               id="title"
                               value="{{old('title')}}">
                    </div>
                </section>

                <section class="col-12 col-md-6 my-2">
                    <div>
                        <label for="category_id">دسته بندی پست</label>
                        <select name="category_id" id="category_id" class="form-control form-control-sm">
                            <option value="">یک مورد را انتخاب کنید:</option>
                            @if($categories)
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                            @if(old('category_id') == $category->id)
                                                selected
                                            @endif>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </section>
            </div>

            <section class="col-12 my-2" style="margin-top: 10px">
                <div class="form-group">
                    <label for="photo_id">تصویر پست</label>
                    <input type="file" name="photo_id" id="photo_id">
                </div>
            </section>


            <section class="col-12 my-2">
                <div class="form-group">
                    <label for="body">متن پست</label>
                    <textarea type="text"
                              placeholder="لطفا متن اصلی پست را وارد نمایید..."
                              class="form-control form-control-sm"
                              name="body"
                              id="body"
                              rows="10">{{old('body')}}</textarea>
                </div>
            </section>


            <section class="my-4 mx-4">
                <button class="btn btn-primary btn-sm">ثبت</button>
            </section>

        </section>
    </form>

    @include('includes.form_error')

@endsection

