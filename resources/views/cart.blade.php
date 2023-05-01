@extends('layouts.app')
@section('content')
<x-navbar/>

@if (session()->has('bill_continue'))
<div class="order-confirmation-container">
    <form class="order-confirmation-form" action='/create_order' method="POST">
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
        <textarea required class="delivery-address"  rows="8" name="address" placeholder="Delivery address"></textarea>
        <button type="submit" class="order-form-button">Continue</button>
    </form>
</div>
<script>
    let delivery = document.querySelector('.order-confirmation-delivery');
    let takeout = document.querySelector('.order-confirmation-takeout');
    let inputs = document.querySelectorAll('.order-type-input')
    let goback = document.querySelector('.go-back')
    let container = document.querySelector('.order-confirmation-container')
    let deliveryAddress = document.querySelector('.delivery-address')
    goback.addEventListener('click',()=>{
        container.remove()
    })
    delivery.addEventListener('click',()=>{
        inputs[0].checked = true
        deliveryAddress.hidden = false
        deliveryAddress.required = true
    })
    takeout.addEventListener('click',()=>{
        inputs[1].checked = true
        deliveryAddress.hidden = true
        deliveryAddress.required = false

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
        window.location.href = "/myorders"
    }, 5000);
</script>
@endif

<x-banner>
    <h1>My <span style="color: var(--secondary)">Cart</span></h1>
</x-banner>

<div class="cart-container">
        @livewire('cart-products-spreader')

        @livewire('bill')
</div>
<x-services/>
<x-footer/>




@endsection
