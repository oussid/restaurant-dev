@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('order.index')}}" class="breadcrum-link">
                Orders
            </a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('orders-table')
    </div>
</div>

@endsection