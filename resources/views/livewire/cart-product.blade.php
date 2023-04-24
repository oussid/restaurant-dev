<div class="order-items-container">
    @forelse ($cartProducts as $cartProduct )
    <div class="order-item">
        <div class="order-item-img" style="background-image:url('{{ $cartProduct->options->image}}')"></div>
        <div class="order-item-details">
            <div class="order-item-details-top">
                <h3>{{ $cartProduct->name }}</h3>
                <button wire:click="removeItem('{{$cartProduct->rowId}}')" class="trash-btn"><i class="fa-solid fa-trash-can trash-icon"></i></button>
            </div>
            <div class="order-item-details-description">
                <p>-{{$cartProduct->description}}</p>
            </div>
            <div class="order-item-details-bottom">
                <h2>${{ $cartProduct->price }}</h2>
                <input wire:model="qty" wire:change="updateItem({{ $cartProduct->rowId }})"type="number" min="1" value="{{ $cartProduct->qty }}"/>
            </div>
        </div>
    </div>

    @empty
    <div class="cart-no-items">
      <h3> No items in the cart yet</h3>
       <a href="/" class="go-shopping-btn">Start shopping <i class="fa-solid fa-right-to-bracket"></i></a>
    </div>
    @endforelse
</div>
