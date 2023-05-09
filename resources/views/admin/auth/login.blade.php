@extends('layouts.admin-unauthenticated')

@section('content')
    
<div class="login-form-container">
    {{session('error')}}
    {{session('message')}}
    <form action="{{route('admin.login')}}" method="POST" class="login-admin-form">
        @csrf
        <div class="login-form-top">
            <h2>Welcome back!</h2>
            <p>Sign in to continue</p>
        </div>

        <div class="login-form-main">
            <div>
                <div class="form-error">
                    @error('email')
                       <p class="error-message">{{$message}}</p> 
                    @enderror
                </div>
                <input type="email" placeholder="Email address" name="email" value="{{old('email')}}">
            </div>

            <div>
                <div class="form-error">
                    @error('password')
                       <p class="error-message">{{$message}}</p> 
                    @enderror
                </div>
                <input type="text" placeholder="Password" name="password" value="{{old('password')}}"> 
            </div>
            <button type="submit">Login</button>
        </div>

        <div class="login-form-bottom">
            <a href="{{route('forgotPasswordForm')}}"> <i class="fa-solid fa-lock"></i>  Forgot password?</a>
        </div>
    </form>
</div>

@endsection