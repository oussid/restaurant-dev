@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('banner.index')}}" class="breadcrum-link">
                Banners
            </a>
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('banner.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('banners-table')
    </div>
</div>

@endsection