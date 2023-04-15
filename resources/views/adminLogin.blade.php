@extends('layouts.admin-unauthenticated')

<div class="login-form-container">
    <form action="" class="login-admin-form">
        <div class="login-form-top">
            <h2>Welcome back!</h2>
            <p>Sign in to continue</p>
        </div>

        <div class="login-form-main">
            <input type="email" placeholder="Email address" name="email">
            <input type="text" placeholder="Password" name="password">
            <button type="submit">Login</button>
        </div>

        <div class="login-form-bottom">
            <a href="#"> <i class="fa-solid fa-lock"></i>  Forgot password?</a>
        </div>
    </form>
</div>
