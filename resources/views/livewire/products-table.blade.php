<div class="table-container">
    <div class="table-container-top">
        <div class="table-container-top-title">
        </div>
        <div class="table-container-top-search">
            <input wire:model='search' type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-container-main">
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>                   
                    <th>Today's Special</th>                   
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td><img class="mini-square-img" src="{{asset($product->image)}}" alt="Category Image"></td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->category->name}} </td>
                        <td> No </td>
                        <td>
                            <div class="col-action-btns">
                                <a href="{{route("product.edit", ["product"=>$product->id])}}">
                                    <button class="edit-resource-btn" >
                                        <i class="fa-solid fa-pen-to-square"></i>   
                                    </button>
                                </a>
    
                                <form action="{{route("product.destroy", ["product"=>$product->id])}}" method="POST">
                                    @method("DELETE")
                                    @csrf
    
                                <button class="delete-resource-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button> 
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='6'>No products to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$products->links('pagination-links')}}
    </div>
</div>  