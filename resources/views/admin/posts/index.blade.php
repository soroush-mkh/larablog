@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_post'))
        <div class="unset rounded">
            <p class="bg-danger m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing:
            border-box;
             margin: 10px">
                {{session('deleted_post')}}
            </p>
        </div>
    @elseif(Session::has('updated_post'))
        <div class="unset rounded">
            <p class="bg-info m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('updated_post')}}
            </p>
        </div>
    @elseif(Session::has('saved_post'))
        <div class="unset rounded">
            <p class="bg-success m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('saved_post')}}
            </p>
        </div>
    @endif

    <h1 class="page-header">پست ها</h1>

    @if(count($posts) > 0)

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>تصویر</th>
                <th>عنوان پست</th>
                <th>نویسنده پست</th>
                <th>دسته بندی</th>
                <th>لینک پست</th>
                <th>نظرات</th>
                <th>زمان انتشار</th>
                <th>زمان آخرین تغییر</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
{{--                    <td style="vertical-align: middle;">{{$post->id}}</td>--}}
                    <td style="vertical-align: middle;">
                        {{ (($posts->currentPage() * 10) - 10) + $loop->iteration  }}
                    </td>
                    <td style="vertical-align: middle;">
                        <img class="rounded" style="width: 50px;height: 50px" width="50px" height="50px"
                             src="{{$post->photo_id ? asset('images/'.$post->photo->file) :asset('images/no-photo.png')}}"
                             alt=""></td>
                    <td style="vertical-align: middle;">
                        <a href="{{route('admin.posts.edit',$post->id)}}">{{Str::limit($post->title,25)}}</a>
                    </td>
                    <td style="vertical-align: middle;">
                        {{$post->user->name}}
                    </td>
                    <td style="vertical-align: middle;">{{$post->category ? $post->category->name : 'نا مشخص'}}</td>
                    <td style="vertical-align: middle;">
                        <a href="{{route('home.post',$post->slug)}}">
                            نمایش پست
                        </a>
                    </td>
                    <td style="vertical-align: middle;">
                        <a href="{{route('admin.comments.show',$post->id)}}">
                            نمایش نظرات
                        </a>
                    </td>
                    <td style="vertical-align: middle;">{{$post->created_at->diffForHumans()}}</td>
                    <td style="vertical-align: middle;">{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <h2 class="text-center">هیچ پستی ثبت نشده است.</h2>
    @endif

    <section style="margin-left: 15px;margin-right: 45%;">
        {{$posts->links()}}
    </section>

@endsection
