<div >
    <button onclick="toggleDropdown('{{$order->order_number}}')" class="action-resource-btn dropdownBtn"> 
        Actions <i class="fa-solid fa-chevron-down"></i>
    </button> 

    <div id="{{$order->order_number}}" class="action-resource-btn-dropdown dropdown">
        <div  wire:click="updateStatus({{$order->id}},1)" class="action-resource-btn-dropdown-tab">
            Preparing
        </div>
        @if ($order->delivery_type != 'takeout')
            <div  wire:click="setOrderId({{$order->id}})"  class="action-resource-btn-dropdown-tab">
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
</div>
