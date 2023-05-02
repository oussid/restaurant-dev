@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('delivery.index')}}" class="breadcrum-link">
                Delivery Men
            </a>
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('delivery.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('delivery-men-table')
    </div>
</div>

@endsection