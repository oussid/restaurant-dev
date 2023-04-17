@extends('layouts.admin')

@section('content')
<div class="admin-dashboard">
    {{-- DASHBOARD CARDS --}}
    <div class="admin-dashboard-cards">
        <x-dashboard-card label='Categories' count='9' >
            <i class="fa-solid fa-list"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Products' count='33' >
            <i class="fa-solid fa-burger"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Customers' count='286' >
            <i class="fa-solid fa-user-group"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Delivery Men' count='1' >
            <i class="fa-solid fa-motorcycle"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Total Orders' count='935' >
            <i class="fa-solid fa-cart-shopping"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Testimonials' count='11' >
            <i class="fa-solid fa-star"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Bookings' count='12' >
            <i class="fa-solid fa-calendar"></i>
        </x-dashboard-card>
        
        <x-dashboard-card label='Earnings' count='$322,552' >
            <i class="fa-solid fa-money-bill"></i>
        </x-dashboard-card>
    </div>

    {{-- DASHBOARD CHARTS --}}
    <div class="admin-dashboard-charts">
        <div class="admin-dashboard-charts-orders">
            <p class="chart-title">Orders</p>
            @if (count($ordersChart)>0)
            <x-doughnut-chart :orders='$ordersChart'/>
            @else
            No orders yet
            @endif
        </div>
        <div class="admin-dashboard-charts-earnings">
            <p class="chart-title">Earnings</p>
            @if (count($earningsChart)>0)
            <x-bar-chart :earnings='$earningsChart' />
            @else
            No orders yet
            @endif
        </div>
    </div>
</div>

@endsection