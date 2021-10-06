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


        </ul>


    </div>
    <!-- /.sidebar-collapse -->
</div>
