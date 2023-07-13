@extends('layouts.login')
@section('title', ' Reset Email')
@section('content')
<div class="content">
    <div class="brand"> <br>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <form id="forgot-form" action="{{ route('password.email') }}" method="post">
        @csrf
        <h3 class="m-t-10 m-b-10">Forgot password</h3>
        <p class="m-b-20">Enter your email address below and we'll send you password reset instructions.</p>
        <div class="form-group">
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
            @if($errors->has('email'))
            <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">Send Password Reset Link</button>
        </div>
    </form>
</div>
@endsection