<!-- Flash message HTML content -->
@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ace-icon fa fa-times"></i></button>

        {{ Session::get('success') }}
    </div>
@endif
@if (Session::has('danger'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ace-icon fa fa-times"></i></button>

        {{ Session::get('danger') }}
    </div>
@endif


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
