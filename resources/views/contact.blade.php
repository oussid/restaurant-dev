@extends('layouts.app')
@section('content')
@if (session()->has('success'))
<div class="flash-message-container">
    <div class="flash-message"><h3>{{ session()->get('success') }}</h3><i class="fa-solid fa-envelope-circle-check"></i></div>
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
<x-navbar/>
<div class="contact-container">
    <div class="booking-header">
        <h1>Help <span>&</span> contact</h1>
    </div>
    <div class="contact-content-container">

        <div class="contact-infos">

            <div class="contact-infos-row">

                <div class="contact-infos-square">
                    <i class="fa-solid fa-envelope"></i>
                    <h2>Email</h2>
                    <p>justbotbeats@gmail.com</p>
                </div>
                <div class="contact-infos-square">
                    <i class="fa-solid fa-phone"></i>
                    <h2>Mobile</h2>
                    <p>+212 645626182</p>
                </div>
            </div>

            <div class="contact-infos-row">

                <div class="contact-infos-square">
                    <i class="fa-solid fa-location-dot"></i>
                    <h2>Address</h2>
                    <p>Avenue M5, Rabat, Agdal, Morocco</p>
                </div>
                <div class="contact-infos-square">
                    <i class="fa-solid fa-business-time"></i>
                    <h2>Working hours</h2>
                    <p>From 09:00</p>
                    <p>To 00:00</p>

                </div>
            </div>
        </div>
        <div class="contact-form-container">
            <form action="/contact" method="post" class="contact-form">
                @csrf
                <h1>What do you have in <span>mind?</span></h1>
                <h3>Please feel free to contact us if you have any questions or concerns.</h3>
                <div class="contact-form-short-inputs">
                    <div class="contact-form-input-box">
                        <input type="text" placeholder="First Name" name="first_name" required
                        @if (Auth::check())
                            value= {{explode(' ',Auth::user()->name)[0] }}
                        @endif>
                        @error('first_name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="contact-form-input-box">
                        <input type="text" placeholder="Last Name" name="last_name" required
                        @if (Auth::check())
                            value= {{explode(' ',Auth::user()->name)[1] }}
                        @endif/>
                        @error('last_name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="contact-form-long-inputs">
                    <div class="contact-form-input-box">
                        <input type="text" placeholder="Email" name="email" required
                        @if (Auth::check())
                        value= {{Auth::user()->email}}
                        @endif/>
                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="contact-form-input-box">
                        <textarea   rows="10" placeholder="Message" name="message" required></textarea>
                        @error('message')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>

</div>
<x-services/>
<x-footer/>



@endsection
