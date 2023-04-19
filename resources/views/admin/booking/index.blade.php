@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Table Bookings
        </div>

    </div>

    <div class="resource-index-main">
        @livewire('bookings-table')
    </div>
</div>

@endsection