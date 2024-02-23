<div class="table-container ">
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
                    <th>#</th>
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
                        <td> {{$order->order_number}} </td>
                        <td> {{$order->created_at}} </td>
                        <td> {{$order->name}} <br> {{$order->mobile}} <br> {{$order->email}} </td>
                        <td> ${{$order->total}} </td>
                        <td class="{{$this->convertStatus($order->status)['class']}} ">
                            {{$this->convertStatus($order->status)['label']}}
                        </td>
                        <td class="col-action-btns vertical"> 
                            {{-- {{dd($order);}} --}}
                            <button onclick="toggleDropdown('{{$order->order_number}}')" class="action-resource-btn dropdownBtn"> 
                                Actions <i class="fa-solid fa-chevron-down"></i>
                            </button> 

                            <a href="{{route('order.show', ['order'=>$order->id])}}">
                                <button class="details-resource-btn">
                                    <i class="fa-solid fa-list"></i>
                                </button>
                            </a>
                            <div id="{{$order->order_number}}" class="action-resource-btn-dropdown dropdown">
                                <div wire:click="updateStatus({{$order->id}},1)" class="action-resource-btn-dropdown-tab">
                                    Preparing
                                </div>
                                @if ($order->delivery_type != 'takeout' && $order->status != 2)
                                
                                    <div  wire:click="showModal('assign-to-delivery-man', {{$order->id}})"  class="action-resource-btn-dropdown-tab">
                                        Assign to delivery man
                                    </div>
                                @endif
                                <div wire:click="updateStatus({{$order->id}},3)" class="action-resource-btn-dropdown-tab">
                                    Completed
                                </div>
                                <div wire:click="updateStatus({{$order->id}},0)"  class="action-resource-btn-dropdown-tab">
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
        
    <x-modal modalId="assign-to-delivery-man">
        @livewire('assign-delivery-man', ['orderId'=> $orderId, 'modalId'=>'assign-to-delivery-man'], key($this->orderId))
    </x-modal>
</div>  

