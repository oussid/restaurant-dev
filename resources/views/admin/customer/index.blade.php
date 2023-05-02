@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('customer.index')}}" class="breadcrum-link">
                Customers
            </a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('customers-table')
    </div>
</div>

@endsection