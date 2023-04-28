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
                    <th>Name</th>
                    <th>Category</th>                   
                    <th>Today's Special</th>                   
                    <th>Status</th>                   
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($orders as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->order_number}} </td>
                        <td> {{$product->order_number}} </td>
                        <td class="{{$this->convertStatus($product->status)['class']}} ">
                            {{$this->convertStatus($product->status)['label']}}
                        </td>
                        <td> No </td>
                        <td>
                            <td class="col-action-btns"> 
                                <button onclick="toggleDropdown('{{$product->order_number}}')" class="action-resource-btn dropdownBtn"> 
                                    Actions <i class="fa-solid fa-chevron-down"></i>
                                </button> 
                                <div id="{{$product->order_number}}" class="action-resource-btn-dropdown dropdown">
                                    <div wire:click="updateStatus({{$product->id}},1)" class="action-resource-btn-dropdown-tab">
                                        Preparing
                                    </div>
                                    @if ($product->delivery_type != 'takeout')
                                        <div   wire:click="setOrderId({{$product->id}})"  class="action-resource-btn-dropdown-tab">
                                            Assign to delivery man
                                        </div>
                                    @endif
                                    <div wire:click="updateStatus({{$product->id}},3)" class="action-resource-btn-dropdown-tab">
                                        Completed
                                    </div>
                                    <div wire:click="updateStatus({{$product->id}},0)"  class="action-resource-btn-dropdown-tab">
                                        Cancel
                                    </div>
                                </div>
                            </td>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='6'>No products to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$orders->links('pagination-links')}}
    </div>
</div>  