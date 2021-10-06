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

    <!-- Admin Top Navigation -->
    @include('includes.admin_top_nav')

{{-- Admin Side Navigation --}}
@include('includes.admin_side_nav')

<!-- /.navbar-static-side -->
</nav>
