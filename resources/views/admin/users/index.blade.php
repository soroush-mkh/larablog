@extends('layouts.admin')

@section('content')

    <h1 class="page-header">کاربران</h1>


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
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td style="vertical-align: middle;">{{$user->id}}</td>
                    <td style="vertical-align: middle;">{{$user->name}}</td>
                    <td style="vertical-align: middle;">{{$user->email}}</td>
                    <td style="vertical-align: middle;">{{$user->role ? $user->role->name : 'نامشخص'}}</td>
                    <td style="vertical-align: middle;">{{$user->is_active ? 'فعال' : 'غیرفعال'}}</td>
                    <td style="vertical-align: middle;">{{$user->created_at->diffForHumans()}}</td>
                    <td style="vertical-align: middle;">{{$user->updated_at->diffForHumans()}}</td>
                    <td style="vertical-align: middle;"><img height="50px"
                                                             width="50px"
                                                             class="rounded"
                                                             src="{{$user->profile_photo_path ? asset
                                                             ($user->profile_photo_path) : asset
                                                             ('images/no-photo.png')
                                                             }}">
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
