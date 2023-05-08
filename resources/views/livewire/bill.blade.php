<div class="bill-container">
    <form class="bill-form" action="/cart_bill_continue" method="POST">
        @csrf
        <h2>Bill details</h2>
        <div class="bill-details"><p>Order total</p><p>${{{ $subtotal }}}</p></div>
        <div class="bill-details"><p>Total pay</p><p>${{ $subtotal }}</p></div>
        @if ($cartCount>0)
            <button type="submit" class="bill-form-button">Continue</button>
        @endif
    </form>
</div>
