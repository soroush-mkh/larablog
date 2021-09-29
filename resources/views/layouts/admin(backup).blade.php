<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/libs/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/metisMenu.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <!-- /.navbar-header -->


        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fas fa-user"></i> <i class="fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


        </ul>


        {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--@if(auth()->guest())--}}
        {{--@if(!Request::is('auth/login'))--}}
        {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
        {{--@endif--}}
        {{--@if(!Request::is('auth/register'))--}}
        {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
        {{--@endif--}}
        {{--@else--}}
        {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}

        {{--<li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--@endif--}}
        {{--</ul>--}}


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>

                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-users"></i>
                            Users
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/users">All Users</a>
                            </li>

                            <li>
                                <a href="/users/create">Create User</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-newspaper"></i>
                            Posts
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/posts">All Posts</a>
                            </li>

                            <li>
                                <a href="/posts/create">Create Post</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-layer-group"></i>
                            Categories
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/categories">All Categories</a>
                            </li>

                            <li>
                                <a href="/categories/create">Create Category</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                            <i class="fas fa-photo-video"></i>
                            Media
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/categories">All Media</a>
                            </li>

                            <li>
                                <a href="/categories/create">Upload Media</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                                <i class="fas fa-chart-bar"></i>
                            Charts
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fas fa-file-signature"></i> Forms</a>
                    </li>
                    <li>
                        <a style="display: flex; align-items: center; justify-content: space-between"
                           href="#0">
                            <span>
                                <i class="fas fa-hammer"></i>
                             UI Elements
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="icons.html"> Icons</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
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
                                Sample Pages
                                </span>
                            <i class="fas fa-caret-left"></i>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active" href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
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


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/profile"><i class="fa fa-dashboard fa-fw"></i>Profile</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">All Posts</a>
                        </li>

                        <li>
                            <a href="">Create Post</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>


            </ul>

        </div>

    </div>

</div>


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>

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
