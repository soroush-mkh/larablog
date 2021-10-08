@if(Session::has('saved_comment'))
    <div class="alert alert-success d-block mt-4 col-md-8" style="padding-top: 10px;display: block;float: unset">
        <ul>
            <li>{{session('saved_comment')}}</li>
        </ul>
    </div>
@endif

@if(Session::has('search_found'))
    <div class="alert alert-success d-block mt-4 col-md-8" style="padding-top: 10px;display: block;float: unset">
        <ul>
            <li>{{session('search_found')}}</li>
        </ul>
    </div>
@endif

@if(Session::has('search_not_found'))
    <div class="alert alert-warning d-block mt-4 col-md-8" style="padding-top: 10px;display: block;float: unset">
        <ul>
            <li>{{session('search_not_found')}}</li>
        </ul>
    </div>
@endif

