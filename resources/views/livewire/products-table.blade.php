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
                        <td> {{$product->image}} </td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->category->label}} </td>
                        <td> No </td>
                        <td> actions </td>
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