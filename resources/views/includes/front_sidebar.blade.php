<div class="col-md-4">


    <!-- Blog Search Well -->
    <div class="well" style="background: #F5F5F5; border-radius: 1rem;box-shadow: 1px 1px 4px
         #c0c0c0">
        <form action="{{route('home.search')}}" method="post">
            @csrf
            <h4 style="font-weight: bold;">جستجو در وبلاگ</h4>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="جستجو کنید..." name="searchWord">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <span class="fas fa-search"></span>
                </button>
                </span>
            </div>
            <!-- /.input-group -->
        </form>
    </div>


    <!-- Blog Categories Well -->
    <div class="well" style="background: #F5F5F5; border-radius: 1rem;box-shadow: 1px 1px 4px
         #c0c0c0">
        <h4 style="font-weight: bold">دسته بندی</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    @if($categories)
                        @foreach($categories as $category)
                            <li style="line-height: 2.5rem"><a
                                    href="{{route('home.category',$category->name)}}">{{$category->name}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well" style="background: #F5F5F5; border-radius: 1rem;box-shadow: 1px 1px 4px
         #c0c0c0">
        <h4 style="font-weight: bold">درباره وبلاگ</h4>
        <p style="text-align: justify;text-justify: inter-word;">
            دیجیاتو تنها یک درگاه خبری در زمینه فناوری نیست. هرچند شاید در نگاه نخست ما نیز وبسایتی جوان برای اطلاع‌رسانی در باب اخبار فناوری و رویدادهای حوزه تکنولوژی باشیم ولی در حقیقت کمی که به زیر پوستمان بروید خواهید فهمید برای ما هدف زندگی است نه چند گوشی و لپ‌تاپ و دوربین. چه بسا همانگونه که از شعار دیجیاتو حدس زده‌اید ما سایت نیستیم، بلکه تلاشی هستیم برای توسعه سبک زندگی دیجیتالی. از پهپاد گرفته تا اتوموبیل از کسب‌و کار گرفته تا شبکه‌های اجتماعی همه در این قلمرو گسترده از زندگی جدید هستند.
            <br>
            دیجیاتو نه تنها تلاش می‌کند در گام بعدی دامنه و تنوع نوشته‌هایش را با محوریت فناوری به عرصه‌های جدیدی از زندگی گسترش دهد بلکه همچنان خواهد کوشید در عصر جدیدی از حیات کشورمان بیشتر و بهتر در قلب رویدادهای فناوری ایران و جهان حضور داشته باشد. با دیجیاتو همراه باشید تا با یکدیگر مرزهای جدیدی از حیات مدرن، شفاف و دوستانه دیجیتالی را تجربه کنیم.
        </p>
    </div>

</div>
