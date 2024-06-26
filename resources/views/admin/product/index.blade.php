@extends('layouts.admin')

@section('content')
<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('product.index')}}" class="breadcrum-link">
                Products
            </a>
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('product.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('products-table')
    </div>
</div>
@endsection