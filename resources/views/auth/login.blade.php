@extends('layouts.login')
@section('title', 'Login')
@section('content')
<div class="content" style="text-align:center">
    <div class="brand">
        <a class="link" href="{{ route('login') }}"></a><br>
    </div>
    <form id="login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="login-title">Book Recommendation System Login</h2>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                <input class="form-control" type="email" value="{{ old('email') }}" name="email" placeholder="email" autocomplete="off">
                @if($errors->has('email'))
                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                <input class="form-control" type="password" name="password" placeholder="password">
                @if($errors->has('password'))
                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('password') }}</span></p>
                @endif
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label class="ui-checkbox ui-checkbox-info">
                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                <span class="input-span" for="customCheck"></span>Remember Me ?</label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forget Password</a>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit" style="cursor: pointer;">Sign In</button>
        </div>
        <div class="social-auth-hr">
            <span>Or login with</span>
        </div>
        <div class="text-center social-auth m-b-20">
            <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
        </div>
        @if (Route::has('register'))
        <div class="text-center">Not a member?
            <a class="color-blue" href="#">New User</a>
        </div>
        @endif
    </form>
</div>
@endsection