@extends('layouts.app')

@section('content')
    <x-navbar/>
    <x-carousel />
    <div class="sample-products-container">
        @foreach ( $products as $product )
        <div onclick="window.location.href='/products/{{ $product->id }}'" class="sample-product">
            <div class="sample-product-img" style="background-image:url({{$product->img }})"></div>
        </div>
        @endforeach
    </div>
    <div class="categories-container">
        <x-sections-header>
            <x-slot name="title">Categories</x-slot>
            <x-slot name="button">View All</x-slot>
            <x-slot name="buttonUrl">/categories</x-slot>
        </x-sections-header>
        <div class="categories">
            @foreach ($categories as $category )
            <div class="category">
                <div class="category-img" style="background-image:url({{ $category->img }})"></div>
                <div class="category-name">{{ $category->name }}</div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="today-special-container">
        <x-sections-header>
            <x-slot name="title">Today's Special</x-slot>
            <x-slot name="button">View All</x-slot>
            <x-slot name="buttonUrl">/products</x-slot>
        </x-sections-header>
        <x-products-spreader :products="$todaySpecialProducts" />

        <div class="sample-products-container">
            @foreach ( $sampleProducts as $product )
            <div style="height:270px"  onclick="window.location.href='/products/{{ $product->id }}'" class="sample-product">
                <div class="sample-product-img" style="background-image:url({{$product->img }})"></div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="recommended-container">
        <x-sections-header>
            <x-slot name="title">Recommended</x-slot>
            <x-slot name="button">View All</x-slot>
            <x-slot name="buttonUrl">//products</x-slot>
        </x-sections-header>
        <x-products-spreader :products="$todaySpecialProducts" />
    </div>
    <x-cta/>
    <x-services/>
@endsection

