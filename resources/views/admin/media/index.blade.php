@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_media'))
        <div class="unset rounded">
            <p class="bg-danger m-5 m-md-5 m-sm-5 m-lg-5 rounded" style="float: unset; padding: 10px; box-sizing:
            border-box;
             margin: 10px">
                {{session('deleted_media')}}
            </p>
        </div>
    @endif

    <h1 class="page-header">رسانه ها</h1>

    @if(count($photos) > 0)

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>تصویر</th>
                <th>نام فایل</th>
                <th>زمان آپلود</th>
            </tr>
            </thead>
            <tbody>

            @foreach($photos as $photo)
                <tr>
                    {{--                    <td style="vertical-align: middle;">{{$photo->id}}</td>--}}
                    <td style="vertical-align: middle;">
                        {{ (($photos->currentPage() * 10) - 10) + $loop->iteration  }}
                    </td>
                    <td style="vertical-align: middle;"><img style="width: 50px;height: 50px" height="50px"
                                                             width="50px"
                                                             class="rounded"
                                                             src="{{$photo->file ? asset('storage/photos/shares/'
                                                             .$photo->file)
                                                             : asset
                                                             ('images/no-photo.png')}}">
                    </td>
                    <td style="vertical-align: middle;">
                        {{$photo->file}}
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

    <section style="margin-left: 15px;margin-right: 45%;">
        {{$photos->links()}}
    </section>

@endsection
