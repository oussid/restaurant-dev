@extends('layouts.app')
@section('content')




@if (session()->has('error'))
<div class="flash-message-container">
    <div class="flash-message flash-error"><h3>{{ session()->get('error') }}</h3><i class="fa-solid fa-circle-xmark"></i></div>
</div>
<script>
        setTimeout(() => {
            let successFlash = document.querySelector('.flash-message-container')
            successFlash.style.display = "none";
        }, 5000);
</script>
@elseif (session()->has('success'))
<div class="flash-message-container">
    <div class="flash-message"><h3>{{ session()->get('success') }}</h3><i class="fa-solid fa-calendar-check"></i></div>
</div>
<script>
    setTimeout(() => {
        let successFlash = document.querySelector('.flash-message-container')
        successFlash.style.display = "none";
    }, 5000);
</script>
    @else
    <x-loader/>
@endif
<x-navbar/>
<div class="booking-container">
<x-banner>
    <h1>Book a <span style="color: var(--secondary)">table</span></h1>
</x-banner>
    <div class="booking-form-container">
        <form class="booking-form" action="/booking" method="POST">
            @csrf

            <div class="booking-details">
                <h2>Book a table</h2>
                <div class="booking-inputs-container">
                    <div class="booking-inputs-grp">
                        <label for="date">Date</label>
                        <input type="date" name="date" required/>
                        @error('date')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="booking-inputs-grp">
                        <label for="time">Time</label>
                        <input type="time" name="time" min="09:00" max="00:00" required/>
                    @error('time')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="booking-inputs-grp">
                        <label for="n_guests">Number of guests</label>
                        <input type="number" name="n_guests" placeholder="Number of guests" min="1" max="10" required/>
                        @error('n_guests')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="booking-inputs-grp">
                        <label for="booking_type">Booking type</label>
                        <input type="text" name="booking_type" placeholder="Booking type" required/>
                        @error('booking_type')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="contact-details">
                <h2>Contact details</h2>
            </div>
            <div class="contact-inputs-container">
                <div class="contact-inputs-grp">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" required placeholder="Full Name"
                    @if (Auth::check()) value='{{ Auth::user()->name }}' @endif>
                    @error('name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="contact-inputs-grp">
                    <label for="email">Email</label>
                    <input type="email" name="email" required placeholder="Email"
                    @if (Auth::check()) value='{{ Auth::user()->email }}' @endif/>
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="contact-inputs-grp">
                    <label for="mobile">Mobile</label>
                    <input type="tel" name="mobile" required placeholder="Mobile"
                    @if (Auth::check()) value='{{ Auth::user()->mobile }}' @endif/>
                    @error('mobile')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="contact-inputs-grp">
                    <label for="special_r">Special Request</label>
                    <textarea placeholder="Special Request (Optional)" rows="10" name="special_r"></textarea>
                </div>
                <div class="booking-form-button">
                    <button type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <x-services/>
</div>
<x-footer/>

@endsection
