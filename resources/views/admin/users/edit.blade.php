@extends('layouts.admin')


@section('content')


    <h1 class="page-header">ویرایش کاربر</h1>

    <img class="col-md-3 rounded-md"
         style="margin-top: 1rem;border-radius: 2rem"
         class="rounded my-5"
         src="{{$user->profile_photo_path ? asset($user->profile_photo_path) : asset('images/no-photo.png')}}"
         alt="">

    <form method="POST"
          action="{{route('admin.users.update',$user->id)}}"
          class="col-md-9"
          style="float: unset"
          enctype="multipart/form-data">

        @csrf

        {{method_field('PUT')}}


        <section class="row col-6">

            <section class="col-12 my-2">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text"
                           class="form-control form-control-sm"
                           name="name"
                           id="name"
                           value="{{old('name',$user->name)}}">
                </div>
            </section>

            <section class="col-12 my-4">
                <div class="form-group">
                    <label for="email">پست الکترونیکی</label>
                    <input type="email"
                           class="form-control form-control-sm"
                           name="email"
                           id="email"
                           value="{{old('email',$user->email)}}">
                </div>
            </section>


            <section class="col-12 my-2">
                <div>
                    <label for="role_id">نوع کاربر</label>
                    <select name="role_id" id="role_id" class="form-control">
                        <option value="">یک مورد را انتخاب کنید:</option>
                        @if($roles)
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" @if(old('role_id',$user->role_id) == $role->id)
                                selected
                                    @endif>{{$role->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </section>

            <section class="col-12 my-4 pt-4">
                <div>
                    <label for="is_active">فعالیت</label>
                    <select name="is_active" id="status" class="form-control form-control-sm">
                        <option value="0"
                                @if(old('is_active',$user->is_active) == 0) selected @endif>غیرفعال
                        </option>
                        <option value="1" @if(old('is_active',$user->is_active) == 1) selected @endif>فعال</option>
                    </select>
                </div>
            </section>

            <section class="col-12 my-2 mt-4">
                <div class="form-group">
                    <label for="password">کلمه عبور</label>
                    <input type="password"
                           class="form-control form-control-sm"
                           name="password"
                           id="password">
                </div>
            </section>

            <section class="col-12 my-2">
                <div class="form-group">
                    <label for="profile_photo">تصویر</label>
                    <input type="file" class="form-control form-control-sm" name="profile_photo" id="profile_photo">
                </div>
            </section>


            <section class="my-4 mx-4">
                <button class="btn btn-info">ویرایش</button>
            </section>


        </section>


    </form>

    <form action="{{route('admin.users.destroy',$user->id)}}" method="POST"
          style="float: unset;margin-top: 10px">
        @csrf
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger">حذف کاربر</button>
    </form>

    @include('includes.form_error')

@endsection

