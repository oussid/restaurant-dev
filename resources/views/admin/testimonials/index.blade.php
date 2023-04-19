@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Testimonials
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('testimonial.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('testimonials-table')
    </div>
</div>

@endsection