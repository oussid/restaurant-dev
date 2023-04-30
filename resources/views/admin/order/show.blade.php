@extends('layouts.admin')

@section('content')

<div class="show-container">
    <div class="show-top">
        <div class="show-top-part">
            Order Details
        </div>
        
        <div class="show-top-part">
            <button>
                Print
            </button>
            
            <button>
                Actions
            </button>
        </div>
    </div>
   <div class="order-show">
    <div class="order-show-left">
        {{-- order details --}}
        <div class="order-show-block">
            <div class="block-details-container">
                <div class="block-details">
                    <div class="block-details-row header">
                        #sdjsd1f6s
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            block Type 
                        </div>
                        <div class="block-details-col">
                            Takeaway
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            Payment Type
                        </div>
                        <div class="block-details-col">
                            Cash
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- customer details --}}
        <div class="order-show-block">
            <div class="block-details-container">
                <div class="block-details">
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <img class="mini-round-img" src="{{asset('images/profile_placeholder.jpg')}}" alt="Profile picture">
                        </div>
                        <div class="block-details-col">
                            User name
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="block-details-col">
                            +14686494654
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="block-details-col">
                            user@mail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order-show-right">
        <div class="order-show-block">
    
        </div>
        <div class="order-show-block">
    
        </div>
    </div>
</div> 
</div>


@endsection