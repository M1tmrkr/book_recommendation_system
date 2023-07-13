@extends('layouts.login')
@section('title', ' Reset Password')
@section('content')
<div class="content">
    <div class="brand">
        <br>
    </div>
    <form id="register-form" action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <h3 class="m-t-10 m-b-10">Reset Password</h3>
        <div class="form-group">
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
            @if($errors->has('email'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password">
            @if($errors->has('password'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('password') }}</span></p>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
            @if($errors->has('password_confirmation'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('password_confirmation') }}</span></p>
            @endif
        </div>
        <div class="form-group text-left">
            <label class="ui-checkbox ui-checkbox-info">
                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                <span class="input-span" for="customCheck"></span>I agree the terms and policy</label>
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">Reset Password</button>
        </div>

    </form>
</div>
@endsection