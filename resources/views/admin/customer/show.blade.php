@extends('layouts.admin')

@section('content')

<div class="show-container">
    <div class="show-top">
        <div class="breadcrum">
            <a href="{{route('customer.index')}}" class="breadcrum-link">
                Customers
            </a> / 
            <a href="{{route('customer.show', ['customer' => $customer->id])}}" class="breadcrum-link">
                Customer Details
            </a>
        </div>
    </div>

    <div class="customer-show">
        <div class="customer-show-top">
            <div class="customer-show-top-left">
                <div class="block">
                    <div >
                        <img class="medium-round-img" src="{{asset('images/profile_placeholder.jpg')}}" alt="">
                    </div>
                    <div class="block-head">
                        {{$customer->name}}
                    </div>
                    <div>
                        {{$customer->email}}
                    </div>
                </div>
            </div>

            <div class="customer-show-top-right">
                <div class="block">
                    <div class="block-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="block-head">
                        Total Orders
                    </div>
                    <div>
                        {{$customer->orders->count()}}
                    </div>
                </div>
                <div class="block">
                    <div class="block-icon">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <div class="block-head">
                        Total Spent
                    </div>
                    <div>
                        ${{$customer->orders->where('status', '!=', '0')->sum('total')}}
                    </div>
                </div>
                <div class="block">
                    <div class="block-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="block-head">
                        Joined at
                    </div>
                    <div>
                        {{$customer->created_at}}
                    </div>
                </div>
            </div>
        </div>

        <div class="customer-show-main">
            @livewire('orders-table', ['customer' => $customer, 'title'=> $customer->name . "' orders"])
        </div>
    </div>
</div>

@endsection