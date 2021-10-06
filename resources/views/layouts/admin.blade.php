<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>پرشین بلاگ: مدیریت سایت</title>
    @yield('title')

    <link rel="shortcut icon" href="{{ asset('images/persian_blog_icon.png') }}">

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Bootstrap Core CSS -->
    {{--<link href="{{asset('/css/app.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('css/libs/blog-post.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('css/libs/styles.css')}}" rel="stylesheet">--}}
    <link href="{{asset('css/libs/sb-admin-2.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/libs/metisMenu.css')}}" rel="stylesheet">--}}
    <link href="{{asset('css/libs/bootstrap.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/libs/font-awesome.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('css/libs.css')}}" rel="stylesheet">--}}

    <style>
        th {
            text-align: right;
        }

        .navbar-brand {
            float: right;
            padding: unset;
        }

        .row, .container-fluid, #page-wrapper, section {
            float: unset;
        }

        .btn {
            margin: unset;
        }

        .unset {
            all: unset;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('header')

</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    @include('includes.admin_nav')




    {{--<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/profile"><i class="fa fa-dashboard fa-fw"></i>پروفایل</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> پست ها<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">تمام پست ها</a>
                        </li>

                        <li>
                            <a href="">ساخت پست جدید</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>


            </ul>

        </div>

    </div>--}}

</div>


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @yield('content')

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>
<script src="{{asset('js/libs/bootstrap.js')}}"></script>
<script src="{{asset('js/libs/jquery.js')}}"></script>
<script src="{{asset('js/libs/metisMenu.js')}}"></script>
<script src="{{asset('js/libs/sb-admin-2.js')}}"></script>
<script src="{{asset('js/libs/scripts.js')}}"></script>

@yield('footer')


</body>

</html>
