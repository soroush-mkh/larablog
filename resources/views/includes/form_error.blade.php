@if(count($errors)>0)
    <div class="alert alert-danger d-block mt-4 col-md-6" style="padding-top: 10px;display: block;float: unset">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
