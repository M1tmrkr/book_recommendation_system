@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} List | SCMS
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4  text-primary"> {{ $_panel }}</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.setting.social.store',  $row->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <div class="row">
                    <label for="facebook" class="control-label col-md-2">Facebook Link</label>
                    <div class="col-md-10">
                        <input class=" form-control" type="url" id="facebook" name="facebook" value="@if(isset($row->social_profile_fb)) {{ $row->social_profile_fb }} @else {{ old('social_profile_fb') }} @endif">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <label for="facebook" class="control-label col-md-2">Twitter Link</label>
                    <div class="col-md-10">
                        <input class=" form-control" type="url" id="twitter" name="twitter" value="@if(isset($row->social_profile_twitter)) {{ $row->social_profile_twitter }} @else {{ old('social_profile_twitter') }} @endif">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <label for="facebook" class="control-label col-md-2">Instagram</label>
                    <div class="col-md-10">
                        <input class=" form-control" type="url" id="insta" name="insta" value="@if(isset($row->social_profile_insta)) {{ $row->social_profile_insta }} @else {{ old('social_profile_insta') }} @endif">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <label for="facebook" class="control-label col-md-2">Youtube</label>
                    <div class="col-md-10">
                        <input class=" form-control" type="url" id="youtube" name="youtube" value="@if(isset($row->social_profile_youtube)) {{ $row->social_profile_youtube }} @else {{ old('social_profile_youtube') }} @endif">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <label for="facebook" class="control-label col-md-2">Linkedin</label>
                    <div class="col-md-10">
                        <input class=" form-control" type="url" id="linkedin" name="linkedin" value="@if(isset($row->social_profile_linkedin)) {{ $row->social_profile_linkedin }} @else {{ old('social_profile_linkedin') }} @endif">
                    </div>
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