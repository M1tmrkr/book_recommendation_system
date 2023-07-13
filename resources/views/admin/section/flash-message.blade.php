@if (request()->session()->has('error_message'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Error!</strong> {!! request()->session()->get('success_message') !!}
</div>
@endif

@if (request()->session()->has('success_message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Success!</strong> {!! request()->session()->get('success_message') !!}

</div>
@endif