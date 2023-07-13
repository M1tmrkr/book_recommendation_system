@extends('layouts.login')
@section('title', 'Register')
@section('content')

<div class="content">
    <div class="brand">
        <!-- <a class="link" href="{{ route('register') }}">Create an Account!</a> --> <br>
    </div>
    <form id="register-form" action="{{ route('register') }}" method="POST">
        @csrf
        <h2 class="login-title">नयाँ प्रयोगकर्ता</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="नाम">
            @if($errors->has('name'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('name') }}</span></p>
            @endif
        </div>

        <div class="form-group">
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="इमेल" autocomplete="off">
            @if($errors->has('email'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="mobile" value="{{ old('mobile') }}" placeholder="मोबाइल" autocomplete="off">
            @if($errors->has('mobile'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('mobile') }}</span></p>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control" id="password" type="password" name="password" placeholder="पासवर्ड">
            @if($errors->has('password'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('password') }}</span></p>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirmation" placeholder="पासवर्ड पुन: लेख्नुहोस">
            @if($errors->has('password_confirmation'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('password_confirmation') }}</span></p>
            @endif
        </div>
        <div class="form-group text-left">
            <label class="ui-checkbox ui-checkbox-info">
                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                <span class="input-span" for="customCheck"></span>मलाई सम्झनुहोस्</label>
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">साइन अप</button>
        </div>
        <div class="social-auth-hr">
            <span>Or Sign up with</span>
        </div>
        <div class="text-center social-auth m-b-20">
            <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
        </div>
        @if (Route::has('login'))
        <div class="text-center">Already a member?
            <a class="color-blue" href="{{ route('login') }}">प्रयोगकर्ता लग-ईन</a>
        </div>
        @endif
    </form>
</div>

@endsection