@extends('layouts.admin')

@section('content')
<div class="resource-index">
    <div class="resource-index-top">
        <div class="resource-index-top-left">
            Products
        </div>
        <div class="resource-index-top-right">
            <a href="{{route('product.create')}}">Add New</a>
        </div>
    </div>

    <div class="resource-index-main">
        @livewire('products-table')
    </div>
</div>
@endsection