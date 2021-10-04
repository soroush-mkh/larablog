@extends('layouts.blog-post')

@section('content')
    <!-- Blog Post -->

    <!-- Title -->
    <h1 style="margin-top: 10rem">{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        پست شده توسط <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="far fa-clock"></span> پست شده در {{$post->created_at->diffForHumans()}} </p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{asset('images/'.$post->photo->file)}}" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead"
       style="font-size: 1.9rem; text-align: justify;text-justify: inter-word;line-height:3rem">{{$post->body}}</p>

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

                <button type="submit" class="btn btn-primary" style="float: unset;margin-top: 10px">درج نظر</button>
            </form>
        </div>

    @endif

    <hr>

    <!-- Posted Comments -->

    @if(isset($comments) && count($comments) > 0)
        @foreach($comments as $comment)
            <!-- Comment -->
            <div class="media">
                <a class="pull-right" href="#">
                    <img class="media-object" src="{{asset($comment->photo)}}" width="64px" height="64px" alt="">
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

                                    <div class="comment-reply-container">

                                        <button class="toggle-reply btn btn-primary pull-left">پاسخ</button>

                                        <div class="comment-reply col-sm-6" style="display: none;">

                                            <form method="post" action="{{route('comment.replies.createReply')}}">
                                                @csrf

                                                <input type="hidden" name="comment_id" value="{{$comment->id}}">

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
                                    <!-- End Nested Comment -->
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    @endif
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
