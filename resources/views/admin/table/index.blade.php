@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('table.index')}}" class="breadcrum-link">
                Tables
            </a>
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('table.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('tables-table')
    </div>
</div>

@endsection