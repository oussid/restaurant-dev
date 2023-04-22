@extends('layouts.app')
@section('content')
<x-navbar/>

@if (session()->has('bill_continue'))
<div class="order-confirmation-container">
    <form class="order-confirmation-form" action={{ route('order.store') }} method="POST">

        @csrf
        <div class="order-confirmation-form-header">
            <h3>Delivery option</h3>
            <i class="fa-solid fa-xmark go-back"></i>
        </div>
        <div class="order-confirmation-type">
            <div class="order-confirmation-delivery">
                <input type="radio" name="type" checked class="order-type-input" value="delivery"/>
                <div class="order-confirmation-graphic">
                    <i class="fa-solid fa-truck-fast"></i>
                    <h3>Delivery</h3>
                </div>

            </div>
            <div class="order-confirmation-takeout">
                <input type="radio" name="type" class="order-type-input" value="takeout"/>
                <div class="order-confirmation-graphic">
                    <i class="fa-solid fa-shop"></i>
                    <h3>Takeout</h3>
                </div>
            </div>
        </div>
        <button type="submit" class="order-form-button">Continue</button>
    </form>
</div>
<script>
    let delivery = document.querySelector('.order-confirmation-delivery');
    let takeout = document.querySelector('.order-confirmation-takeout');
    let inputs = document.querySelectorAll('.order-type-input')
    let goback = document.querySelector('.go-back')
    let container = document.querySelector('.order-confirmation-container')
    goback.addEventListener('click',()=>{
        container.remove()
    })
    delivery.addEventListener('click',()=>{
        inputs[0].checked = true
    })
    takeout.addEventListener('click',()=>{
        inputs[1].checked = true

    })
</script>
@elseif(session()->has("order_created"))
<div class="flash-message-container">
    <div class="flash-message"><h3>{{ session()->get('order_created') }}</h3><i class="fa-solid fa-circle-check"></i></div>
</div>
<script>
    setTimeout(() => {
        let successFlash = document.querySelector('.flash-message-container')
        successFlash.style.display = "none";
    }, 5000);
</script>
@endif

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
        <form class="bill-form" action="/cart_bill_continue" method="POST">
            @csrf
            <h2>Bill details</h2>
            <div class="bill-details"><p>Order total</p><p> {{ Cart::subtotal() }}</p></div>
            <div class="bill-details"><p>Tax</p><p> {{ Cart::tax() }}</p></div>
            <div class="bill-details"><p>Total pay</p><p> {{ Cart::total() }}</p></div>
            @if (Cart::content()->count()>0)
                <button type="submit" class="bill-form-button">Continue</button>
            @endif
        </form>
    </div>
</div>
<x-services/>
<x-footer/>




@endsection
