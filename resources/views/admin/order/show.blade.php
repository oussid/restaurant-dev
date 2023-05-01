@extends('layouts.admin')

@section('content')

<div class="show-container">
    <div class="show-top">
        <div class="show-top-part">
            Order Details
        </div>
        
        <div class="show-top-part">
            <button>
                Print
            </button>
            
            <button>
                Actions
            </button>
        </div>
    </div>
   <div class="order-show">
    <div class="order-show-part">
        {{-- order details --}}
        <div class="order-show-block">
            <div class="block-details-container">
                <div class="block-details">
                    <div class="block-details-row header">
                        {{$order->order_number}}
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            Order Type 
                        </div>
                        <div class="block-details-col">
                            {{$order->delivery_type}}
                        </div>
                    </div>
                    <div class="block-details-row">
                        <div class="block-details-col">
                            Order Date
                        </div>
                        <div class="block-details-col">
                            {{$order->created_at}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- customer details --}}
        <div class="order-show-block">
            <div class="block-details-container">
                <div class="block-details">
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <img class="mini-round-img" src="{{asset('images/profile_placeholder.jpg')}}" alt="Profile picture"> 
                            <p class="title">{{$order->user->name}}</p>
                        </div>
                    </div>
                    @if ($order->user->mobile)
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-phone"></i>
                            <p >{{$order->user->mobile}}</p>
                        </div>
                    </div>
                    @endif
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-envelope"></i>
                            <p >{{$order->user->email}}</p>
                        </div>
                    </div>
                    @if($order->address)
                    <div class="block-details-row">
                        <div class="block-details-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <p >{{$order->address}}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="order-show-part">
        <div class="order-show-block">
            @livewire('order-progress', ['order' => $order])
        </div>

        <div class="order-show-block">
            <div class="block-details-container">

                <table class="regular-table">
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Product
                            </th>
                            <th>
                                Unit Cost
                            </th>
                            <th>
                                Qty
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                        
                        @foreach ($order->products as $product)
                        <tr>
                            <td>
                                <img class="mini-square-img" src="{{asset($product->image)}}">
                            </td>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                ${{$product->price}}
                            </td>
                            <td>
                                {{$product->pivot->quantity}}
                            </td>
                            <td>
                                ${{$product->pivot->quantity * $product->price}}
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <th colspan="4" class="right">
                                Total pay
                            </th>
                            <td>
                                ${{$order->total}}
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div> 
</div>


@endsection