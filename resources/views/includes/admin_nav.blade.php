<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

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
                <i class="fas fa-user" style="margin: 0 .1em"></i>
                {{auth()->user()->name}}
                <i class="fas fa-angle-down" style="margin: 0 .4em"></i>
            </a>
            <ul class="dropdown-menu dropdown-user" style="z-index: 1000;">
                <li><a href="#" class="navbar-link"><i class="fa fa-user fa-fw"></i> پروفایل کاربر </a>
                </li>
                <li class="divider"></li>
                <li>
                    <form method="post" style="margin: 0 .3rem" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="navbar-link" style="margin-top: 8px">
                            <i class="fas fa-sign-out-alt"></i>
                            خروج از حساب کاربری
                        </button>
                    </form>
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
