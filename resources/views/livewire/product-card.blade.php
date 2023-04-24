<div>
    <div class="product-card">
        <div class="product-image" style="background-image:url('{{ $productCard->image }}')"></div>
        <div class="product-name"> {{ $productCard->name }}</div>
        <div class="product-category">{{ $productCard->category->name }}</div>
        <div class="card-footer">
            <div class="product-price">${{ $productCard->price }}</div>
            <input wire:model="quantity" type="number" min=1 class="quantity" name="quantity" value=1/>

            <button wire:click="addToCart({{ $productCard->id }})" class="card-button" type="submit">ADD</button>
        </div>
    </div>
</div>
