@extends('layouts.app')
@section('content')
@if (session()->has('success'))
<div class="flash-message-container">
    <div class="flash-message"><h3>{{ session()->get('success') }}</h3><i class="fa-solid fa-thumbs-up"></i></div>
</div>
<script>
        setTimeout(() => {
            let successFlash = document.querySelector('.flash-message-container')
            successFlash.style.display = "none";
            window.location.href ='/'
        }, 5000);
    </script>
    @else
    <x-loader/>
@endif

<div class="signup-container">

    <div class="signup-filter">
        <form class="signup-form" action="/signup" method="POST">
            @csrf
        {{-- Sign up header (logo and text) --}}
            <div class="signup-form-header">
                <div onclick="window.location.href='/'" style="background-image: url('{{$config->logo}}')" class="form-logo"></div>
                <h3>{{$config->name}}</h3>
            </div>
            {{-- Sign up long inputs container --}}
            <div class="signup-form-long-inputs">
                <div class="signup-form-long-input-grp">
                    <label for="name">Full name</label>
                    <input type="text" name="name" placeholder="Full name" required />
                    @error('name')
                        <h4 class='error'>{{ $message }}</h4>
                    @enderror
                </div>
                <div class="signup-form-long-input-grp">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email"  required/>
                    @error('email')
                        <h4 class='error'>{{ $message }}</h4>
                    @enderror
                </div>
            </div>
            {{-- Sign up short inputs row container --}}
            <div class="signup-form-short-inputs-row">
                <div class="signup-form-short-input-grp">
                    <label for="mobile">Mobile</label>
                    <div><i class="fa-solid fa-phone"></i><input type="tel" name="mobile" placeholder="Mobile"  required/></div>
                    @error('mobile')
                        <h4 class='error'>{{ $message }}</h4>
                    @enderror
                </div>
            </div>
            {{-- Sign up short inputs row container --}}
            <div class="signup-form-short-inputs-row">
                <div class="signup-form-short-input-grp">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required />
                    @error('password')
                        <h4 class='error'>{{ $message }}</h4>
                    @enderror
                </div>
                <div class="signup-form-short-input-grp">
                    <label for="c_password">Confirm password</label>
                    <input type="password" name="c_password" placeholder="Confirm password" required />
                    @error('c_password')
                        <h4 class='error'>{{ $message }}</h4>
                    @enderror
                </div>
            </div>
            <div class="signup-form-terms">
                <input type="checkbox" class="terms-checkbox" name="terms" required/>
                <label for="terms">I accept the
                    <a href="/terms_policy">Terms and Conditions</a>
                </label>
            </div>
            @error('terms')
            <h4 class='error'>{{ $message }}</h4>
            @enderror
            <div class="signup-form-button">
                <button type="submit">Signup</button>
            </div>
            <div class="signup-form-footer">
                Already have an account? <a href="/login">Login</a>
            </div>
        </form>
    </div>

</div>
@endsection
