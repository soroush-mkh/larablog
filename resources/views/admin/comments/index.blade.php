@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_comment'))
        <div class="unset rounded">
            <p class="bg-danger m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing:
            border-box;
             margin: 10px">
                {{session('deleted_comment')}}
            </p>
        </div>
    @elseif(Session::has('updated_comment'))
        <div class="unset rounded">
            <p class="bg-info m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing: border-box;
             margin: 10px">
                {{session('updated_comment')}}
            </p>
        </div>
    @endif

    <h1 class="page-header">نظرات</h1>

    @if(count($comments) > 0)

        <table class="table table-striped">
            <thead>
            <tr>
                <th>شماره نظر</th>
                <th>نویسنده</th>
                <th>پست الکترونیکی</th>
                <th>متن نظر</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td style="vertical-align: middle;">{{$comment->id}}</td>
                    <td style="vertical-align: middle;">{{$comment->author}}</td>
                    <td style="vertical-align: middle;">{{$comment->email}}</td>
                    <td style="vertical-align: middle;">{{$comment->body}}</td>
                    <td style="vertical-align: middle;">
                        <a href="{{route('home.post',$comment->post->slug)}}">
                            نمایش پست
                        </a>
                    </td>
                    <td>
                        <a href="{{route('comment.replies.show',$comment->id)}}">
                            مشاهده پاسخ ها
                        </a>
                    </td>
                    <td>
                        @if($comment->is_active == 1)
                            <form method="post" action="{{route('admin.comments.update',$comment->id)}}">
                                @csrf
                                {{method_field('PATCH')}}
                                <input type="hidden" name="is_active" value="0">
                                <button type="submit" class="btn btn-info">عدم تایید</button>
                            </form>
                        @else
                            <form method="post" action="{{route('admin.comments.update',$comment->id)}}">
                                @csrf
                                {{method_field('PATCH')}}
                                <input type="hidden" name="is_active" value="1">
                                <button type="submit" class="btn btn-success">تایید</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form method="post" action="{{route('admin.comments.destroy',$comment->id)}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @else
                <h2 class="text-center">هیچ نظری ثبت نشده است.</h2>
    @endif


@endsection
