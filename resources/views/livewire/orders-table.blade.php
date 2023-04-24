<div class="table-container">
    <div class="table-container-top">
        <div class="table-container-top-title">
            {{$title}}
        </div>
        <div  class="table-container-top-search">
            <input wire:model='search' type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-container-main">
        <table>
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>User Details</th>
                    <th>Total</th>                    
                    <th>Status</th>                    
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td> {{$order->id}} </td>
                        <td> {{$order->created_at}} </td>
                        <td> {{$order->name}} <br> {{$order->mobile}} <br> {{$order->email}} </td>
                        <td> ${{$order->total}} </td>
                        <td> {{$order->status}} </td>
                        <td class="col-action-btns"> 
                            {{-- {{dd($order);}} --}}
                            <button onclick="toggleDropdown('{{$order->order_number}}')" class="action-resource-btn dropdownBtn"> 
                                Actions <i class="fa-solid fa-chevron-down"></i>
                            </button> 
                            <div id="{{$order->order_number}}" class="action-resource-btn-dropdown dropdown">
                                <div wire:click="updateStatus({{$order->id}},1)" class="action-resource-btn-dropdown-tab">
                                    Preparing
                                </div>
                                <div wire:click="updateStatus({{$order->id}}, 2, 1)"   class="action-resource-btn-dropdown-tab">
                                    Assign to delivery man
                                </div>
                                <div  wire:click="updateStatus({{$order->id}},3)" class="action-resource-btn-dropdown-tab">
                                    Completed
                                </div>
                                <div wire:click="updateStatus({{$order->id}},4)"  class="action-resource-btn-dropdown-tab">
                                    Cancel
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='7'>No orders to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$orders->links('pagination-links')}}
    </div>

</div>  



