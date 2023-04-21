@extends('layouts.app')
@section('content')
<x-navbar/>
<x-banner>
    <h1>My <span style="color: var(--secondary)">Cart</span></h1>
</x-banner>
<div class="cart-container">
    <div class="order-items-container">
        @forelse (Cart::content() as $product )
        <form class="order-item" method="post" action="/cart_remove_item">
            @csrf
            <input type="text" name="rowId" value="{{$product->rowId}}" hidden>
            <div class="order-item-img" style="background-image:url('{{ $product->options->image}}')"></div>
            <div class="order-item-details">
                <div class="order-item-details-top">
                    <h3>{{ $product->name }}</h3>
                    <button type="submit" class="trash-btn"><i class="fa-solid fa-trash-can trash-icon"></i></button>
                </div>
                <div class="order-item-details-description">
                    <p>-{{$product->description}}</p>
                </div>
                <div class="order-item-details-bottom">
                    <h2>${{ $product->price }}</h2>
                    <input type="number" min="1" value="{{ $product->qty }}"/>
                </div>
            </div>
        </form>
        @empty
        <div class="cart-no-items">
          <h3> No items in the cart yet</h3>
           <a href="/" class="go-shopping-btn">Start shopping <i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
        @endforelse
    </div>
    <div class="bill-container">
        <form class="bill-form"action="">
            <h2>Bill details</h2>
            <div class="bill-details"><p>Order total</p><p> {{ Cart::subtotal() }}</p></div>
            <div class="bill-details"><p>Tax</p><p> {{ Cart::tax() }}</p></div>
            <div class="bill-details"><p>Total pay</p><p> {{ Cart::total() }}</p></div>
            <button type="submit" class="bill-form-button">Continue</button>
        </form>
    </div>
</div>
<x-services/>
<x-footer/>




@endsection
