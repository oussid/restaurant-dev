@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Delivery Men
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