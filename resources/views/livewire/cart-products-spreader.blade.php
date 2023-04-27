<div class="order-items-container">
    @forelse ($cartProducts as $cartProduct )
        @livewire('cart-product',['cartProduct'=>$cartProduct])
    @empty
    <div class="cart-no-items">
      <h3> No items in the cart yet</h3>
       <a href="/" class="go-shopping-btn">Start shopping <i class="fa-solid fa-right-to-bracket"></i></a>
    </div>
    @endforelse
    @if ($cartProducts->count()>0)
        <button wire:click="emptyCart" class="empty-cart-btn">
            Empty cart <i class="fa-solid fa-trash-can-arrow-up"></i>
        </button>
    @endif
</div>
