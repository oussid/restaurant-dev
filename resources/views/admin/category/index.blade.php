@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('category.index')}}" class="breadcrum-link">
                Categories
            </a>
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('category.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('categories-table')
    </div>
</div>

@endsection