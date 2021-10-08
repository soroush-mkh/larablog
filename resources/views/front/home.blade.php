@extends('layouts.blog-home')

@section('styles')
    <style>
        hr{
            border: .1px solid #C1C1C1;
        }
    </style>
@endsection

@section('content')

    <div class="row">

        <!-- Blog Sidebar -->
    @include('includes.front_sidebar')

    <!-- Blog Entries Column -->
        <div class="col-md-8" style="background: #F5F5F5; border-radius: 1rem;padding: 0 3rem;box-shadow: 1px 1px 4px
         #c0c0c0">

            <!-- First Blog Post -->
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    {{--                    <hr>--}}
                    <h2>
                        <a href="/post/{{$post->slug}}"
                           style="line-height: 5rem;font-size: 2.2rem;font-weight: bold;">{{$post->title}}</a>
                    </h2>

                    <p class="lead" style="font-size: 1.8rem;line-height: .2rem;">
                        پست شده توسط {{$post->user->name}}
                    </p>

                    <p class="lead" style="font-size: 1.4rem;line-height: .2rem;">
                        <i class="fas fa-layer-group"></i>
                        {{$post->category->name}}
                    </p>

                    <p style="font-size: 1.2rem;line-height: 0;">
                        <span class="far fa-clock"></span> {{$post->created_at->diffForHumans()}}</p>

                    {{--                    <hr>--}}

                    <img class="img-responsive"
                         style="height: 40rem"
                         src="{{$post->photo ? asset('images/'.$post->photo->file) : "http://placehold.it/900x300"}}"
                         alt="">
                    <br>

                    {{--                    <hr>--}}

                    <p style="line-height: 2.5rem;text-align: justify;text-justify: inter-word;">{!! Str::words($post->body,50,'...') !!}</p>

                    <a class="btn btn-primary" href="/post/{{$post->slug}}">ادامه پست <span class="fa
                    fa-arrow-left"></span></a>

                    <hr>

                @endforeach
            @else
                <h3 class="text-center">کاربر عزیز، متاسفانه پستی یافت نشد. منتظر ما باشید...</h3>
            @endif

        <!-- Pagination -->
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5" style="margin: 0 10rem">
                    {{$posts->links()}}
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

@endsection
