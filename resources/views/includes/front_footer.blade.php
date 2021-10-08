<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <hr>
            <p style="text-align: center;">تمامی حقوق متعلق به پرشین بلاگ است.&copy; - {{\Carbon\Carbon::now()
            ->year}}</p>
        </div>
        <!-- /.col-lg-12 -->
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

<script>
    $(document).ready(function () {
        $(".alert").delay(3000).slideUp(300);
    });
</script>

@yield('scripts')

</body>

</html>
