@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4  text-primary">Edit Roles</h1>
        <a href="{{ route('admin.roles.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Back</a>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::model($data['role'], ['method' => 'post','route' => ['admin.roles.update', $data['role']->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br />
                @foreach($data['permission'] as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $data['rolePermissions']) ? true : false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                <br />
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-warning " type="reset"> <i class="fa fa-trash"></i> Reset</button>
            <button class="btn btn-success" type="submit"> <i class="fa fa-paper-plane"></i> Submit</button>
        </div>
    </div>
    {!! Form::close() !!}



</div>
@endsection