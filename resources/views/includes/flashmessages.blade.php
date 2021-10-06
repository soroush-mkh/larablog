@if(Session::has('saved_comment'))
    <div class="alert alert-success d-block mt-4 col-md-6" style="padding-top: 10px;display: block;float: unset">
        <ul>
            <li>{{session('saved_comment')}}</li>
        </ul>
    </div>
@endif
