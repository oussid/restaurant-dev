@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Categories
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('category.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('categories-table')
    </div>
</div>

@endsection