<div class="products-search-container">
    <div class="search-container">
        <div class="search-input-div">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input wire:model="name" wire:input="updateProducts" type="text" placeholder="Name"/>
        </div>
        <select type="text" wire:model="category" wire:change="updateProducts">
            <option selected value="All">All</option>
            @foreach ($categories as $ctg )
            <option value="{{ $ctg->name }}">{{ $ctg->name }}</option>
            @endforeach
        </select>
    </div>
    <x-products-spreader :products="$products"/>
</div>
<x-services></x-services>
<x-footer></x-footer>
