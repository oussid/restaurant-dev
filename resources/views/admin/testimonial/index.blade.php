@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('testimonial.index')}}" class="breadcrum-link">
                Testimonials
            </a>
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('testimonial.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('testimonials-table')
    </div>
</div>

@endsection