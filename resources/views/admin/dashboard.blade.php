@extends('layouts.admin')

@section('content')
<div class="admin-dashboard">
    {{-- DASHBOARD CARDS --}}
    <div class="admin-dashboard-cards js-adjust-width">
        <x-dashboard-card label='Categories' count='{{$counts["categories"]}}' >
            <i class="fa-solid fa-list"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Products' count='{{$counts["products"]}}' >
            <i class="fa-solid fa-burger"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Customers' count='{{$counts["customers"]}}' >
            <i class="fa-solid fa-user-group"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Delivery Men' count='{{$counts["deliveryMen"]}}' >
            <i class="fa-solid fa-motorcycle"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Total Orders' count='{{$counts["orders"]}}' >
            <i class="fa-solid fa-cart-shopping"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Testimonials' count='{{$counts["testimonials"]}}' >
            <i class="fa-solid fa-star"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Bookings' count='{{$counts["bookings"]}}' >
            <i class="fa-solid fa-calendar"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Earnings' count='${{$counts["earnings"]}}' >
            <i class="fa-solid fa-money-bill"></i>
        </x-dashboard-card>
    </div>

    {{-- DASHBOARD CHARTS --}}
    <div class="admin-dashboard-charts js-adjust-width">
        <div id="admin-chart" class="admin-dashboard-charts-orders">
            <p class="chart-title">Orders</p>
            @if (count($ordersChart)>0)
            <x-doughnut-chart :orders='$ordersChart'/>
            @else
            <div class="chart-empty">No orders to show</div>
            
            @endif
        </div>
        <div id="admin-chart" class="admin-dashboard-charts-earnings  ">
            <p class="chart-title">Earnings</p>
            @if (count($earningsChart)>0)
            <x-bar-chart :earnings='$earningsChart' />
            @else
            <div class="chart-empty">No earnings to show</div>
            
            @endif
        </div>
    </div>
    <div class="admin-dashboard-orders js-adjust-width">
        @livewire('orders-table', ['title' => "Latest orders"])
    </div>

    
</div>

@endsection