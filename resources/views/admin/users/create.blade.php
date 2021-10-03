@extends('layouts.admin')


@section('content')


    <h1 class="page-header">ساخت کاربر جدید</h1>


    <form method="post"
          action="{{route('admin.users.store')}}"
          class="col-sm-12 col-md-6"
          style="float: unset"
          enctype="multipart/form-data">

        @csrf

        <section class="row">

            <section class="col-12 my-2">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text"
                           placeholder="لطفا نام و نام خانوادگی کاربر را وارد نمایید..."
                           class="form-control form-control-sm"
                           name="name"
                           id="name"
                           value="{{old('name')}}">
                </div>
            </section>

            <section class="col-12 my-4">
                <div class="form-group">
                    <label for="email">پست الکترونیکی</label>
                    <input type="email"
                           placeholder="لطفا پست الکترونیکی کاربر را وارد نمایید..."
                           class="form-control form-control-sm"
                           name="email"
                           id="email"
                           value="{{old('email')}}">
                </div>
            </section>


            <section class="col-12 my-2">
                <div>
                    <label for="role_id">نوع کاربر</label>
                    <select name="role_id" id="role_id" class="form-control form-control-sm">
                        <option value="">یک مورد را انتخاب کنید:</option>
                        @if($roles)
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" @if(old('role_id') == "{{$role->id}}") selected
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
                        <option value="0" @if(old('is_active') == 0) selected @endif>غیرفعال</option>
                        <option value="1" @if(old('is_active') == 1) selected @endif>فعال</option>
                    </select>
                </div>
            </section>

            <section class="col-12 my-2 mt-4">
                <div class="form-group">
                    <label for="password">کلمه عبور</label>
                    <input type="password"
                           placeholder="لطفا کلمه عبور مورد نظر را وارد نمایید..."
                           class="form-control form-control-sm"
                           name="password"
                           id="password">
                </div>
            </section>

            <section class="col-12 my-2">
                <div class="form-group">
                    <label for="profile_photo">تصویر</label>
                    <input type="file" name="profile_photo" id="profile_photo">
                </div>
            </section>


            <section class="my-4 mx-4">
                <button class="btn btn-primary btn-sm">ثبت</button>
            </section>

        </section>
    </form>

    @include('includes.form_error')

@endsection

