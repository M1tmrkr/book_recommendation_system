@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} List | SCMS
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4  text-primary">Website Setting</h1>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <form action="{{ route('admin.setting.update',  $data['setting']->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Website Name</label> <br>
                        <input class="form-control" type="text" id="site_name" value="@if(isset($data['setting']->site_name)) {{ $data['setting']->site_name }} @else {{ old('site_name') }} @endif" name="site_name" placeholder="नाम">
                        @if($errors->has('site_name'))
                        <p id="name-error" class="help-block" for="site_name"><span>{{ $errors->first('site_name') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" value="@if(isset($data['setting']->site_email)) {{ $data['setting']->site_email }} @else {{ old('site_email') }} @endif" id="site_email" name="site_email" placeholder="इमेल">
                        @if($errors->has('site_email'))
                        <p id="name-error" class="help-block " for="site_email"><span>{{ $errors->first('site_email') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Tepehone</label>
                        <input class="form-control" type="text" value="@if(isset($data['setting']->site_phone)) {{ $data['setting']->site_phone }} @else {{ old('site_phone') }} @endif" id="site_phone" name="site_phone" placeholder="टेलिफोन">
                        @if($errors->has('site_phone'))
                        <p id="name-error" class="help-block " for="site_phone"><span>{{ $errors->first('site_phone') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="text" value="@if(isset($data['setting']->site_mobile)) {{ $data['setting']->site_mobile }} @else {{ old('site_mobile') }} @endif" id="site_mobile" name="site_mobile" placeholder="मोबाइल नं">
                        @if($errors->has('site_mobile'))
                        <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('site_mobile') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Fax</label>
                        <input class="form-control" type="text" value="@if(isset($data['setting']->site_mobile)) {{ $data['setting']->site_mobile }} @else {{ old('site_mobile') }} @endif" id="site_mobile" name="site_mobile" placeholder="मोबाइल नं">
                        @if($errors->has('site_mobile'))
                        <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('site_mobile') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Address 1</label>
                        <input class="form-control" type="text" value="@if(isset($data['setting']->site_first_address)) {{ $data['setting']->site_first_address }} @else {{ old('site_first_address') }} @endif" id="site_first_address" name="site_first_address" placeholder="ठेगाना १">
                        @if($errors->has('site_first_address'))
                        <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('site_first_address') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Address 2</label>
                        <input class="form-control" type="text" value="@if(isset($data['setting']->site_second_address)) {{ $data['setting']->site_second_address }} @else {{ old('site_second_address') }} @endif" id="site_second_address" name="site_second_address" placeholder="ठेगाना २">
                        @if($errors->has('site_second_address'))
                        <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('site_second_address') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Website Url</label>
                        <input class="form-control" type="url" value="@if(isset($data['setting']->site_url)) {{ $data['setting']->site_url }} @else {{ old('site_url') }} @endif" id="site_url" name="site_url" placeholder="लिंक">
                        @if($errors->has('site_url'))
                        <p id="name-error" class="help-block " for="mobile"><span>{{ $errors->first('site_url') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>About Website </label>
                        <textarea name="site_description" cols="30" rows="5" class="form-control" value="">@if(isset($data['setting']->site_description)) {{ $data['setting']->site_description }} @else {{ old('site_description') }} @endif</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Map </label>
                        <textarea name="map" cols="30" rows="5" class="form-control" value="">@if(isset($data['setting']->map)) {{ $data['setting']->map }} @else {{ old('map') }} @endif</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input class="form-control" type="file" name="logo" id="logo" value="" accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
                <div class="col-md-3">
                    @if($data['setting']->logo)
                    <div class="form-group">
                        <label for=""></label><br>
                        <img src="{{ asset($data['setting']->logo) }}" class="img  img-responsive" width="200px" alt="">
                    </div>
                    @endif
                </div>

            </div>
            <!-- Begin Progress Bar Buttons-->
            <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-ban"></i> Reset</button>
            <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-paper-plane"></i> Submit </button>

            <!-- End Progress Bar Buttons-->
        </form>
    </div>
</div>
@endsection