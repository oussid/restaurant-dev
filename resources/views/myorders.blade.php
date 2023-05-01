@extends('layouts.app');
@section('content')
@if(session()->has("success"))
<div class="flash-message-container">
    <div class="flash-message"><h3>{{ session()->get('success') }}</h3><i class="fa-solid fa-circle-check"></i></div>
</div>
<script>
    setTimeout(() => {
        let successFlash = document.querySelector('.flash-message-container')
        successFlash.style.display = "none";
    }, 5000);
</script>
@endif
<x-navbar/>
<x-banner><h1>My <span>Orders</span></h1></x-banner>



<div class="myorders-container">
    @forelse ($orders as $order )
    <form action="/cancel_order"  method="POST"  class="myorders-order">
        @csrf
        <input type="number" name="order_id" value="{{ $order->id }}" hidden/>
        <h3 class="myorders-order-code">Order code: <span>#{{ strtoupper(substr($order->order_number,9)) }}</span></h3>
        <div class="myorders-order-products-table">
            <table>
                <tr class="my-order-header-row">
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                </tr>
                @foreach ($order->products as $product)
                    <tr class="my-order-data-row">
                        <td>{{ $product['name'] }}</td>
                        <td>x{{ $product['quantity'] }}</td>
                        <td>${{ $product['price'] }}</td>
                    </tr>
                @endforeach
                <tr class="my-order-data-row">
                    <th>Order Total</th>
                    <td colspan="2" style="color: var(--secondary)"><b>${{ $order->total }}</b></td>
                </tr>
            </table>

        </div>
        <div class="myorders-order-footer">
            @if ($order->status != 0 && $order->status != 2 && $order->status != 3)
                <button type="submit"><i class="fa-solid fa-xmark"></i>Cancel </button>
            @endif
            <h3>Status :
                @if ($order->status == 0)
                    <span style="color: red">Canceled</span>
                @elseif($order->status == 1)
                    <span style="color: purple">Preparing</span>
                @elseif($order->status == 2)
                    <span style="color: blue">On the way</span>
                @elseif($order->status == 3)
                    <span style="color: green">Completed</span>
                @else
                    <span style="color: gray">Placed</span>
                @endif
            </h3>
        </div>
    </form>

    @empty
    <div class="cart-no-items">
        <h3> You haven't ordered anything yet</h3>
         <a href="/" class="go-shopping-btn">Order Now<i class="fa-solid fa-right-to-bracket"></i></a>
      </div>
    @endforelse


</div>
<x-services></x-services>
<x-footer></x-footer>
@endsection
