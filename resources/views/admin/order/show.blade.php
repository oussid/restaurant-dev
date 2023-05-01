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
    <div class="order-show-part">
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
                            <p class="title">User name</p>
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-phone"></i>
                            <p >+14686494654</p>
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-envelope"></i>
                            <p >user@mail.com</p>
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <p >20 Cooper Square, New York, NY 10003, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order-show-part">
        <div class="order-show-block">
            @livewire('order-progress')
        </div>
        <div class="order-show-block">
            <div class="block-details-container">

                <table class="regular-table">
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Product
                            </th>
                            <th>
                                Unit Cost
                            </th>
                            <th>
                                Qty
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                        
                        <tr>
                            <td>
                                <img class="mini-square-img" src="{{asset('images/profile_placeholder.jpg')}}">
                            </td>
                            <td>
                                The Ultimate Veggie Burger
                            </td>
                            <td>
                                $50
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                $50
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="right">
                                Total pay
                            </th>
                            <td>
                                $50.00
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div> 
</div>


@endsection