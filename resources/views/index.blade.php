@extends('layouts.app')

@section('content')

    <x-navbar/>
    <x-home-carousel />
    <div class="sample-products-container">
        @forelse ( $sampleProducts as $product )
        <div onclick="window.location.href='/products'" class="sample-product">
            <div class="sample-product-img" style="background-image:url('/{{$product->image }}')"></div>
        </div>
        @empty
        <div class="empty-data">
            <h2>No sample products yet</h2>
        </div>
        @endforelse
    </div>
    <div class="categories-container">
        <x-sections-header>
            <x-slot name="title">Categories</x-slot>
            <x-slot name="button">View All</x-slot>
            <x-slot name="buttonUrl">/products</x-slot>
        </x-sections-header>
        <div class="categories">
            @forelse ($categories as $category )
            <div onclick="window.location.href ='products/{{ $category->name }}'" class="category">
                <div class="category-img" style="background-image:url({{ $category->image }})"></div>
                <div class="category-name">{{ $category->name }}</div>
            </div>
            @empty
            <div class="empty-data">
                <h2>No categories yet</h2>
            </div>
            @endforelse
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
            @forelse ( $sampleProducts as $product )
            <div style="height:270px"  onclick="window.location.href='/products'" class="sample-product">
                <div class="sample-product-img" style="background-image:url('{{$product->image }}')"></div>
            </div>
            @empty
            <div class="empty-data">
                <h2>No sample products yet</h2>
            </div>
            @endforelse
        </div>
    </div>
    <div class="recommended-container">
        <x-sections-header>
            <x-slot name="title">Recommended</x-slot>
            <x-slot name="button">View All</x-slot>
            <x-slot name="buttonUrl">/products</x-slot>
        </x-sections-header>
        <x-products-spreader :products="$products" />
    </div>
    <x-cta/>
    <x-services/>
    <div id="testimonials"></div>
    <x-testimonials />
    <x-footer/> 
    
</body>
</html>
