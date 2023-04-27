@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Orders
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('orders-table')
    </div>
</div>

@endsection