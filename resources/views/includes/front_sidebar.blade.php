<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4 style="font-weight: bold">جستجو در وبلاگ</h4>
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
                            <li style="line-height: 2.5rem"><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4 style="font-weight: bold">درباره وبلاگ</h4>
        <p style="text-align: justify;text-justify: inter-word;">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
    </div>

</div>
