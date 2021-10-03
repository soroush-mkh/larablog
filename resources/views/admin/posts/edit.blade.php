@extends('layouts.admin')


@section('content')


    <h1 class="page-header">ویرایش پست</h1>

    <img class="col-md-4 rounded-md img-responsive"
         style="margin-top: 1rem;border-radius: 2rem;height: 40rem;"
         src="{{$post->photo_id ? asset('images/'.$post->photo->file) : asset('images/no-photo.png')}}"
         alt="">


    <form method="POST"
          action="{{route('admin.posts.update',$post->id)}}"
          class="col-sm-12 col-md-6"
          style="float: unset"
          enctype="multipart/form-data">

        @csrf
        {{method_field('PUT')}}

        <section class="row">

            <section class="col-12 my-2">
                <div class="form-group">
                    <label for="title">عنوان پست</label>
                    <input type="text"
                           class="form-control form-control-sm"
                           name="title"
                           id="title"
                           value="{{old('title',$post->title)}}">
                </div>
            </section>

            <section class="col-12 my-2">
                <div>
                    <label for="category_id">دسته بندی پست</label>
                    <select name="category_id" id="category_id" class="form-control form-control-sm">
                        <option value="">یک مورد را انتخاب کنید:</option>
                        @if($categories)
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @if(old('category_id',$post->category_id) == $category->id)
                                        selected
                                    @endif>{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </section>

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
                              class="form-control form-control-sm"
                              name="body"
                              id="body"
                              rows="5"
                              value="{{old('body')}}">{{$post->body}}</textarea>
                </div>
            </section>


            <section class="my-4 mx-4">
                <button class="btn btn-info btn-sm">ویرایش</button>
            </section>

        </section>
    </form>

    <form action="{{route('admin.posts.destroy',$post  ->id)}}" method="POST"
          style="float: unset;margin-top: 10px">
        @csrf
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger">حذف پست</button>
    </form>

    @include('includes.form_error')

@endsection

