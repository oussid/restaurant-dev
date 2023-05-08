
@extends('layouts.admin-unauthenticated')

@section('content')
<div class="login-form-container">
    {{session('error')}}
    {{session('message')}}
    <form action="{{route('resetPassword')}}" method="post" class="login-admin-form">
        @csrf
        <div class="login-form-top">
            <h2>Password Reset</h2>
            <p>Please enter your email address and new password.</p>
        </div>

        <div class="login-form-main">
            <input type="text" name="token" hidden value="{{$token}}">
            <div>
                @error('email')
                    {{$message}}
                @enderror
                <input type="email" placeholder="Email address" name="email" value="{{old('email')}}">
            </div>
            <div>
                @error('password')
                    {{$message}}
                @enderror
                <input type="password" placeholder="New Password" name="password" value="{{old('password')}}">
            </div>
            <div>
                @error('password_confirmation')
                    {{$message}}
                @enderror
                <input type="password" placeholder="New Password Confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
            </div>
            <button type="submit">Reset Password</button>
        </div>

        <div class="login-form-bottom">
            <a href="{{route('admin.login')}}"><i class="fa-solid fa-right-to-bracket"></i> Return to login</a>
        </div>
    </form>
</div>
@endsection