@extends('layouts.app')
@section('content')


<x-loader/>
<div class="login-container">

    <div class="login-filter">
        <form class="login-form" action="/login" method="POST">
            @csrf
        {{-- Login up header (logo and text) --}}
            <div class="login-form-header">
                <div onclick="window.location.href='/'" class="form-logo"></div>
                <h3>Restaurant</h3>
            </div>
            {{-- Login up long inputs container --}}
            <div class="login-form-inputs">
                <div class="login-form-input-grp">
                    <label for="name">Email</label>
                    <input type="email" name="email" placeholder="Email" required />
                    @if(session()->has('noAcc'))
                        <h4 class='error'>{{ session()->get('noAcc') }}</h4>
                    @endif
                </div>
                <div class="login-form-input-grp">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password"  required/>
                    @if(session()->has('incorrectP'))
                        <h4 class='error'>{{ session()->get('incorrectP') }}</h4>
                    @endif
                </div>
                <div class="login-form-password-recovery"><a href="/forgot-password">Forgot password?</a></div>
                <div class="login-form-button">
                    <button type="submit">Login</button>
                </div>
                <p class="or">---------------------------- OR ----------------------------</p>
                <div class="social-login">
                    <div class="google-login"></div>
                    <div class="facebook-login"></div>
                </div>
                <div class="login-form-footer">
                    Don't have an account? <a href="/signup">Signup</a>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
