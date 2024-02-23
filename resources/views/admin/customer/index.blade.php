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

    <div class="resource-index-main js-adjust-width">
        @livewire('users-table', [
            'emptyMessage' => 'No customers to show',
            'role' => 0,
            'resourceName' => 'customer',
            'actions' => ['show']
        ])
    </div>
</div>

@endsection