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

    <h1 class="page-header">رسانه ها</h1>

    @if($photos)

        <table class="table table-striped">
            <thead>
            <tr>
                <th>شماره تصویر</th>
                <th>تصویر</th>
                <th>زمان آپلود</th>
                <th>امکانات</th>
            </tr>
            </thead>
            <tbody>

            @foreach($photos as $photo)
                <tr>
                    <td style="vertical-align: middle;">{{$photo->id}}</td>
                    <td style="vertical-align: middle;"><img style="width: 50px;height: 50px" height="50px"
                                                             width="50px"
                                                             class="rounded"
                                                             src="{{$photo->file ? asset('images/'.$photo->file)
                                                             : asset
                                                             ('images/no-photo.png')}}">
                    </td>
                    <td style="vertical-align: middle;">{{$photo->updated_at->diffForHumans()}}</td>
                    <td>
                        <form action="{{route('admin.media.destroy',$photo->id)}}" method="post">
                            {{method_field('DELETE')}}
                            @csrf
                            <button type="submit" class="btn btn-danger">حذف رسانه</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2 class="text-center">هیچ رسانه ها ثبت نشده است.</h2>
    @endif
@endsection
