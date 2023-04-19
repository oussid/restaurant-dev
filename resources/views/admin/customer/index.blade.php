@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Customers
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('customer.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('customers-table')
    </div>
</div>

@endsection