@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Tables
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('table.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('tables-table')
    </div>
</div>

@endsection