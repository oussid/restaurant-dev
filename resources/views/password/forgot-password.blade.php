@extends('layouts.admin-unauthenticated')

@section('content')
<div class="login-form-container">
    <form action="{{route('sendForgotPasswordEmail')}}" method="post" class="login-admin-form">
        @csrf
        <div class="login-form-top">
            <h2>Password Reset</h2>
            <p>Please enter your email address. We'll email you a link to reset your password.</p>
        </div>

        <div class="login-form-main">
            <div>
                @error('email')
                <p class="error-message">{{$message}}</p> 
                @enderror
                <input type="email" placeholder="Email address" name="email" value="{{old('email')}}">
            </div>
            <button type="submit">Send Email</button>
        </div>

        <div class="login-form-bottom">
            <a href="{{route('admin.login')}}"><i class="fa-solid fa-right-to-bracket"></i> Return to login</a>
        </div>
    </form>
</div>
@endsection