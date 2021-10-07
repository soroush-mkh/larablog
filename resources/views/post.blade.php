@extends('layouts.blog-home')

@section('content')

    <div class="row">

        @include('includes.front_sidebar')

        <div class="col-md-8" style="padding-top: unset;background: #F5F5F5; border-radius: 1rem;padding: 0 3rem;box-shadow: 1px 1px 4px
         #c0c0c0">

            <!-- Blog Post -->

            <!-- Title -->
            <h1 style="line-height: 5rem;font-size: 2.2rem;font-weight: bold">{{$post->title}}</h1>

            <!-- Author -->
            <p class="lead" style="font-size: 1.8rem;line-height: .2rem;">
                پست شده توسط <a href="#">{{$post->user->name}}</a>
            </p>

        {{--            <hr>--}}

        <!-- Date/Time -->
            <p style="font-size: 1.2rem;line-height: 0;">
                <span class="far fa-clock"></span> {{$post->created_at->diffForHumans()}} </p>

            <hr>

            <!-- Preview Image -->
            <img class="img-responsive rounded" style="height: 40rem;display: block;
                                                      margin-left: auto;
                                                      margin-right: auto;
                                                      max-width:100%;" src="{{asset('images/'.$post->photo->file)}}"
                 alt="">

        {{--            <hr>--}}

        <!-- Post Content -->
            <p class="lead"
               style="margin-top:5rem;font-size: 1.9rem; text-align: justify;text-justify: inter-word;
               line-height:3rem">{!!
               $post->body !!}</p>

            <hr>

            <!-- Blog Comments -->


        @if(Auth::check())
            <!-- Comments Form -->
                <div class="well">
                    <h4>نظرات خود را منتشر کنید:</h4>

                    <form method="post" action="{{route('admin.comments.store')}}">
                        @csrf

                        <input type="hidden" name="post_id" value="{{$post->id}}">

                        <textarea type="text"
                                  placeholder="نظر خود را در این کادر وارد کنید ..."
                                  class="form-control form-control-sm"
                                  name="body"
                                  id="body"
                                  rows="3"></textarea>

                        <button type="submit"
                                class="btn btn-primary"
                                style="float: unset;margin-top: 10px">درج نظر
                        </button>
                    </form>
                </div>


            @else
                <div class="alert alert-info d-block mt-4 col-md-12"
                     style="padding-top: 10px;display: block;float: unset">
                    <ul>
                        <li>برای درج نظرات خود لطفا
                            <a style="text-decoration: underline" href="{{url('/register')}}">ثبت نام کنید</a>
                            یا
                            <a style="text-decoration: underline" href="{{url('/login')}}">وارد حساب کاربری خود شوید</a>
                            .
                        </li>
                    </ul>
                </div>
            @endif

            <hr>

            <!-- Posted Comments -->

            @if(isset($comments) && count($comments) > 0)
                @foreach($comments as $comment)
                <!-- Comment -->
                    <div class="media" style="border-bottom: 1px solid rgba(100,100,100,.2);padding-bottom: 2rem">
                        <a class="pull-right" href="#">
                            <img class="media-object"
                                 style="border-radius: 2rem"
                                 src="{{asset($comment->photo)}}"
                                 width="64px"
                                 height="64px"
                                 alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$comment->author}}
                                <small style="font-size: 1rem;margin-right: 2rem">{{$comment->created_at->diffForHumans()
                        }}</small>
                            </h4>
                        {{$comment->body}}


                        @if(count($comment->replies) > 0)
                            @foreach($comment->replies as $reply)
                                @if($reply->is_active == 1)
                                    <!-- Nested Comment -->
                                        <div class="media" style="margin-top: 25px;">
                                            <a class="pull-right" href="#">
                                                <img class="media-object"
                                                     style="border-radius: 2rem"
                                                     src="{{asset($reply->photo)}}"
                                                     width="50px"
                                                     height="50px"
                                                     alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{$reply->author}}
                                                    <small style="font-size: 1rem;margin-right: 2rem">{{$reply->created_at->diffForHumans()}}</small>
                                                </h4>
                                                {{$reply->body}}
                                            </div>

                                        {{--                                        OLD PLACE--}}

                                        <!-- End Nested Comment -->
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        @if(Auth::user())
                            <div class="comment-reply-container">

                                <button class="toggle-reply btn btn-primary pull-left"
                                        style="margin-left: 1.5rem;margin-bottom: 1rem">پاسخ
                                </button>

                                <div class="comment-reply col-sm-12" style="display: none;">

                                    <form method="post"
                                          action="{{route('comment.replies.createReply')}}">
                                        @csrf

                                        <input type="hidden"
                                               name="comment_id"
                                               value="{{$comment->id}}">

                                        <textarea type="text"
                                                  placeholder="نظر خود را در این کادر وارد کنید ..."
                                                  class="form-control form-control-sm"
                                                  name="body"
                                                  id="body"
                                                  rows="1"></textarea>

                                        <button type="submit"
                                                class="btn btn-primary"
                                                style="float: unset;margin-top: 10px">درج نظر
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <!-- Comment -->

    </div>
@endsection

@section('scripts')
    <script>
        $(".comment-reply-container .toggle-reply").click(function () {
            $(this).next().slideToggle("slow");
        });
    </script>
@endsection
