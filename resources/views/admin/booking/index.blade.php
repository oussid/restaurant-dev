@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('booking.index')}}" class="breadcrum-link">
                Bookings
            </a>
        </div>

    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('bookings-table')
    </div>
</div>

@endsection