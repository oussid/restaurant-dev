@extends('layouts.admin')

@section('content')

<div class="order-show">
    <div class="order-show-left">
        {{-- order details --}}
        <div class="order-show-block">
            <table>
                <thead>
                    <tr>
                        <th colspan="2" class="centered full-width">#SDLK5SDF6S</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Order type</td>
                        <td>Delivery</td>
                    </tr>
                    <tr>
                        <td>Payment type</td>
                        <td>Cash</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- customer details --}}
        <div class="order-show-block">
            <table>
                <tbody>
                    <tr>
                        <td><img src="{{asset('images/profile_placeholder.jpg')}}" alt=""></td>
                    </tr>
                    <tr>
                        <td>+2154654665</td>
                    </tr>
                    <tr>
                        <td>user@gmail.com</td>
                    </tr>
                    <tr>
                        <td>20 Cooper Square, New York, NY 10003, USA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="order-show-right">
        <div class="order-show-block">
    
        </div>
        <div class="order-show-block">
    
        </div>
    </div>
</div>

@endsection