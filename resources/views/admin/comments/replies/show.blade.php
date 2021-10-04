@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_reply'))
        <div class="unset rounded">
            <p class="bg-danger m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing:
            border-box;
             margin: 10px">
                {{session('deleted_reply')}}
            </p>
        </div>
    @elseif(Session::has('updated_reply'))
        <div class="unset rounded">
            <p class="bg-info m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('updated_reply')}}
            </p>
        </div>
    @endif

    <h1 class="page-header">پاسخ های کامنت</h1>

    @if(count($replies) > 0)

        <table class="table table-striped">
            <thead>
            <tr>
                <th>شماره نظر</th>
                <th>نویسنده</th>
                <th>پست الکترونیکی</th>
                <th>متن نظر</th>
                <th>زمان درج</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($replies as $reply)
                <tr>
                    <td style="vertical-align: middle;">{{$reply->id}}</td>
                    <td style="vertical-align: middle;">{{$reply->author}}</td>
                    <td style="vertical-align: middle;">{{$reply->email}}</td>
                    <td style="vertical-align: middle;">{{$reply->body}}</td>
                    <td style="vertical-align: middle;">{{$reply->created_at->diffForHumans()}}</td>
                    <td style="vertical-align: middle;">
                        <a href="{{route('home.post',$reply->comment->post->id)}}">
                            نمایش پست
                        </a>
                    </td>
                    <td>
                        @if($reply->is_active == 1)
                            <form method="post" action="{{route('comment.replies.update',$reply->id)}}">
                                @csrf
                                {{method_field('PATCH')}}
                                <input type="hidden" name="is_active" value="0">
                                <button type="submit" class="btn btn-info">عدم تایید</button>
                            </form>
                        @else
                            <form method="post" action="{{route('comment.replies.update',$reply->id)}}">
                                @csrf
                                {{method_field('PATCH')}}
                                <input type="hidden" name="is_active" value="1">
                                <button type="submit" class="btn btn-success">تایید</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form method="post" action="{{route('comment.replies.destroy',$reply->id)}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @else
                <h2 class="text-center">هیچ پاسخی ثبت نشده است.</h2>
    @endif


@endsection
