@extends('layouts.admin-unauthenticated')

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
            <input type="email" placeholder="Email address" name="email" value="{{old('email')}}">
            <input type="text" placeholder="Password" name="password" value="{{old('password')}}"> 
            <button type="submit">Login</button>
        </div>

        <div class="login-form-bottom">
            <a href="#"> <i class="fa-solid fa-lock"></i>  Forgot password?</a>
        </div>
    </form>
</div>
