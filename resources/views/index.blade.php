@extends('layouts.app')

@section('content')
<x-loader/>
    <x-navbar/>
    <x-carousel />
    <div class="sample-products-container">
        @forelse ( $products as $product )
        <div onclick="window.location.href='/products/{{ $product->id }}'" class="sample-product">
            <div class="sample-product-img" style="background-image:url({{$product->image }})"></div>
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
            <x-slot name="buttonUrl">/categories</x-slot>
        </x-sections-header>
        <div class="categories">
            @forelse ($categories as $category )
            <div class="category">
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
            <div style="height:270px"  onclick="window.location.href='/products/{{ $product->id }}'" class="sample-product">
                <div class="sample-product-img" style="background-image:url({{$product->image }})"></div>
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
            <x-slot name="buttonUrl">//products</x-slot>
        </x-sections-header>
        <x-products-spreader :products="$todaySpecialProducts" />
    </div>
    <x-cta/>
    <x-services/>
    <x-testimonials/>
    <x-footer/>

</body>
</html>
