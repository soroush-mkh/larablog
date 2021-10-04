<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>پرشین بلاگ: مدیریت سایت</title>

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
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
        <div class="navbar-header">
        {{--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>--}}


        <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fas fa-user"></i>
                    {{auth()->user()->name}}
                    <i class="fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user" style="z-index: 1000;">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> پروفایل کاربر </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> تنظیمات </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> خروج از حساب کاربری </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


        </div>
        <!-- /.navbar-header -->


        <ul class="nav navbar-top-links navbar-right">


            <a class="navbar-brand" href="/">پرشین بلاگ</a>


        </ul>


        {{--        <ul class="nav navbar-nav navbar-right">
                @if(auth()->guest())
                @if(!Request::is('auth/login'))
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                @endif
                @if(!Request::is('auth/register'))
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @endif
                @else
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>

                <li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>
                </ul>
                </li>
                @endif
                </ul>--}}


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="جستجو...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/admin"><i class="fas fa-tachometer-alt"></i> داشبورد </a>
                    </li>

                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-users"></i>
                            بخش کاربران
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.users.index')}}">نمایش کاربران</a>
                            </li>

                            <li>
                                <a href="{{route('admin.users.create')}}">ساخت کاربر جدید</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-newspaper"></i>
                            بخش پست ها
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.posts.index')}}">نمایش پست ها</a>
                            </li>

                            <li>
                                <a href="{{route('admin.posts.create')}}">ساخت پست جدید</a>
                            </li>

                            <li>
                                <a href="{{route('admin.comments.index')}}">نمایش نظرات</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-layer-group"></i>
                            بخش دسته بندی ها
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.categories.index')}}">نمایش دسته بندی ها</a>
                            </li>

                            {{--                            <li>
                                                            <a href="{{route('admin.categories.create')}}">ساخت دسته بندی جدید</a>
                                                        </li>--}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-photo-video"></i>
                                بخش رسانه
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.media.index')}}">تمام رسانه ها</a>
                            </li>

                            <li>
                                <a href="{{route('admin.media.upload')}}">آپلود رسانه جدید</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                                <i class="fas fa-chart-bar"></i>
                            بخش نمودار ها
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">نمودار های فلوت</a>
                            </li>
                            <li>
                                <a href="morris.html">نمودار های دیگر</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="tables.html"><i class="fas fa-table"></i> بخش جداول</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fas fa-file-signature"></i> فرم ها</a>
                    </li>
                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                                <i class="fas fa-hammer"></i>
                             المان های طراحی
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">پنل ها</a>
                            </li>
                            <li>
                                <a href="buttons.html">دکمه ها</a>
                            </li>
                            <li>
                                <a href="notifications.html">اطلاع رسانی ها</a>
                            </li>
                            <li>
                                <a href="typography.html">تایپوگرافی</a>
                            </li>
                            <li>
                                <a href="icons.html"> آیکون ها </a>
                            </li>
                            <li>
                                <a href="grid.html">گرید ها</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    {{--<li>
                        <a style="display: flex; align-items: center; justify-content: space-between" href="">
                            <span>
                                <i class="fas fa-caret-square-down"></i>
                                Multi-Level Dropdownn
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a style="display: flex; align-items: center; justify-content: space-between" href="">
                                    <span>
                                    Third Level
                                    </span>
                                    <i class="fas fa-caret-left"></i>
                                </a>

                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>--}}


                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                                <i class="fas fa-file-alt"></i>
                                صفحات نمونه
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="" href="blank.html">صفحات خالی</a>
                            </li>
                            <li>
                                <a href="login.html">صفحه ورود</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                </ul>


            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>


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
