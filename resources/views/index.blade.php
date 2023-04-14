<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
  />

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Heebo&family=Lato&family=Lobster&family=Open+Sans&family=Playfair+Display&display=swap');
    .banner{
        height: 550px;
        background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    .banner-text{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
        width: 100%;
        backdrop-filter: brightness(50%);
        text-align: center;
        text-shadow: 3px 3px black;
    }
    .banner-text>h1{
        color: white;
        font-size: 50px;

    }
    .banner-text>h2{
        font-size: 30px;
        color: var(--secondary)
    }
    .sample-products-container{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        height: 225px;
        padding: 2rem;
        margin: 3rem 0rem;
    }
    .sample-product{
        border-radius: 10px;
        height: 220px;
        flex: 0.29;
        overflow: hidden;
    }
    .sample-product-img{
        border-radius: 10px;
        width: 100%;
        height: 100%;
        background-size:cover;
        background-position:center;
        transition: ease-in-out 0.3s;
        cursor: pointer;
    }
    .sample-product:hover .sample-product-img,.sample-product:focus .sample-product-img{
        transform: scale(1.1);
        filter:brightness(50%);
    }
    .categories-container{
        display: flex;
        flex-direction: column;
        margin-bottom:3rem;
        height: 300px;
        width: 100%;
        gap: 1rem;
    }

    .categories{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        gap: 4rem
    }
    .category{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        cursor: pointer;
        transition:ease-in-out 0.3s;
    }
    .category-img{
        height: 125px;
        width: 125px;
        border-radius:50%;
        background-image:url('https://cdn.pixabay.com/photo/2014/10/19/20/59/hamburger-494706_960_720.jpg');
        background-size:cover;
        background-position:center;
        outline: #e5ebee  5px solid;
        border: white 5px solid;
        transition:ease-in-out .3s;
    }
    .category:hover{
        transform: rotateY(30deg);
    }
    .category-name{
        text-align: center;
        font-size: 25px;
    }

    </style>
<body>
    <x-nav/>
    <div class="banner">
        <div class="banner-text">
            <h1>Lorem ipsum dolor sit</h1>
            <h2>Lorem ipsum dolor sit</h2>
        </div>
    </div>
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
    <x-reviews/>
</body>
</html>
