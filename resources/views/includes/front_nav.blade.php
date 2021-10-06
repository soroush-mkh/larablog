<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container" style="all: unset; display: flex; align-items: center; justify-content: right">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="direction: rtl;float: right">
            <button type="button"
                    class="navbar-toggle"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin: unset" href="#">پرشین بلاگ</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="all: unset">
            <ul class="nav navbar-nav">

                @if(Auth::guest())
                    <li>
                        <a href="{{url('/register')}}">ثبت نام</a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}">ورود با حساب کاربری</a>
                    </li>
                @else
                    <li>
                        <a href="/logout">خروج از حساب کاربری</a>
                    </li>
                    <li>
                        <a href="/admin">صفحه مدیریت</a>
                    </li>
                @endif

{{--                <li>
                    <a href="#">درباره ما</a>
                </li>
                <li>
                    <a href="#">خدمات</a>
                </li>
                <li>
                    <a href="#">ارتباط با ما</a>
                </li>--}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container" style="margin-top: 10rem;">

