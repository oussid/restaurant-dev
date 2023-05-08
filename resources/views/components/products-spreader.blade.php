<style>
    .products-container{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        min-height: 550px;
        gap:2rem;
        margin: 3rem 0rem;
    }
    .product-card{
        display: flex;
        flex-direction: column;
        height: 400px;
        width: 250px;
        border-radius:5px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        transition: ease-in-out .3s;
    }
    .product-card:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 4px 8px 4px;
        transform: scale(1.05)
    }
    .product-image{
        background-position: center;
        background-size:cover;
        background-repeat: no-repeat;
        height: 70%;
        width: 100%;
        border-radius:5px 5px 0px 0px;
    }
    .product-name{
        padding: 1rem;
        font-size: 20px;
    }
    .product-category{
        font-size: 15px;
        padding: 1rem;
        color: green;
    }
    .product-name,.card-footer, .product-category{
        padding: 0.5rem;
    }
    .card-footer{
        display: flex;
        justify-content: space-between;
        align-self: center;
        border-top:var(--border) solid 1px ;
        width: 80%;
        font-size: 20px;
    }
    .card-price{
        font-weight: bold;
    }
    .card-button, .card-button-added{
        background:none;
        outline: none;
        border : rgba(0, 0, 0, 0.16) solid 1px;
        padding: 0rem 0.5rem ;
        border-radius:3px;
        color:green;
        transition: ease-in-out .3s ;
        cursor: pointer;

    }
    .card-button:hover{
        color: red;
    }
    .card-button-added{
        color: green;
        cursor: default;;
    }
    .card-footer >.quantity{
        text-align: center;
        width: 50px;
        padding: 0rem 0.5rem ;
        border-radius:3px;
        border : rgba(0, 0, 0, 0.16) solid 1px;
        outline: none

    }
</style>

<div class="products-container">


        @forelse ($products as $product )
            @livewire("product-card", ["productCard"=>$product], key($product->id))
        @empty
            <div class="empty-data">
                <h2>No products yet</h2>
            </div>
        @endforelse

</div>
