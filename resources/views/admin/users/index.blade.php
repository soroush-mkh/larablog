@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))
        <div class="unset rounded">
            <p class="bg-danger m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing:
            border-box;
             margin: 10px">
                {{session('deleted_user')}}
            </p>
        </div>
    @elseif(Session::has('updated_user'))
        <div class="unset rounded">
            <p class="bg-info m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('updated_user')}}
            </p>
        </div>
    @elseif(Session::has('saved_user'))
        <div class="unset rounded">
            <p class="bg-success m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('saved_user')}}
            </p>
        </div>
    @endif

    <h1 class="page-header">کاربران</h1>


    @if(count($users) > 0)

        <table class="table table-striped">
            <thead>
            <tr>
                <th>شماره کاربری</th>
                <th>نام و نام خانوادگی</th>
                <th>پست الکترونیکی</th>
                <th>نوع کاربر</th>
                <th>فعالیت</th>
                <th>زمان ثبت</th>
                <th>زمان آخرین تغییر</th>
                <th>تصویر کاربر</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td style="vertical-align: middle;">{{$user->id}}</td>
                    <td style="vertical-align: middle;">
                        <a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a>
                    </td>
                    <td style="vertical-align: middle;">{{$user->email}}</td>
                    <td style="vertical-align: middle;">{{$user->role ? $user->role->name : 'نامشخص'}}</td>
                    <td style="vertical-align: middle;">{{$user->is_active ? 'فعال' : 'غیرفعال'}}</td>
                    <td style="vertical-align: middle;">{{$user->created_at->diffForHumans()}}</td>
                    <td style="vertical-align: middle;">{{$user->updated_at->diffForHumans()}}</td>
                    <td style="vertical-align: middle;"><img style="width: 50px;height: 50px" height="50px"
                                                             width="50px"
                                                             class="rounded"
                                                             src="{{$user->profile_photo_path ? asset
                                                             ($user->profile_photo_path) : asset
                                                             ('images/no-photo.png')
                                                             }}">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2 class="text-center">هیچ کاربری ثبت نشده است.</h2>
    @endif

    <section style="margin-left: 15px;margin-right: 45%;">
        {{$users->links()}}
    </section>

@endsection
