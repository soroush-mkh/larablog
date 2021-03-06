<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>پرشین بلاگ</title>
    <link rel="shortcut icon" href="{{ asset('images/persian_blog_icon.png') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- CSS -->
    <link href="{{asset('css/libs/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs/bootstrap.css')}}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

<!-- Navigation -->
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
                <li>
                    <a href="#">درباره ما</a>
                </li>
                <li>
                    <a href="#">خدمات</a>
                </li>
                <li>
                    <a href="#">ارتباط با ما</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">


        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well" style="margin-top: 10rem">
                <h4>جستجو در وبلاگ</h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="جستجو کنید...">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="fas fa-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>دسته بندی</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                            <li><a href="#">نام دسته بندی</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>درباره وبلاگ</h4>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            </div>

        </div>


        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            @yield('content')

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p style="text-align: center">تمامی حقوق متعلق به پرشین بلاگ است.&copy;</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>
<script src="{{asset('js/libs/bootstrap.js')}}"></script>
<script src="{{asset('js/libs/jquery.js')}}"></script>
<script src="{{asset('js/libs/metisMenu.js')}}"></script>
<script src="{{asset('js/libs/sb-admin-2.js')}}"></script>
<script src="{{asset('js/libs/scripts.js')}}"></script>

@yield('scripts')

</body>

</html>
