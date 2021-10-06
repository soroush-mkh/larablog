@extends('layouts.blog-home')

@section('content')

    <div class="row">

        <!-- Blog Sidebar -->
    @include('includes.front_sidebar')

    <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- First Blog Post -->
            @if($posts)
                @foreach($posts as $post)
                    {{--                    <hr>--}}
                    <h2>
                        <a href="#">{{$post->title}}</a>
                    </h2>
                    <p class="lead">
                        پست شده توسط {{$post->user->name}}
                    </p>
                    <span class="far fa-clock"></span> {{$post->created_at->diffForHumans()}}</p>
                    {{--                    <hr>--}}
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <br>
                    {{--                    <hr>--}}
                    <p style="line-height: 2.5rem">{!! Str::limit($post->body,300) !!}</p>
                    <a class="btn btn-primary" href="/post/{{$post->slug}}">ادامه پست <span class="fa
                    fa-arrow-left"></span></a>

                    <hr>

            @endforeach
        @endif
        <!-- Pagination -->

        </div>

    </div>
    <!-- /.row -->

@endsection
