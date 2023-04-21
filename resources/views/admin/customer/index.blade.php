@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Customers
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('customers-table')
    </div>
</div>

@endsection