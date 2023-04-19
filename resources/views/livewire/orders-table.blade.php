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
                        <td> {{$order->order_number}} </td>
                        <td> {{$order->created_at}} </td>
                        <td> {{$order->user->name}} <br> {{$order->user->mobile}} <br> {{$order->user->email}} </td>
                        <td> ${{$order->total}} </td>
                        <td> {{$order->status}} </td>
                        <td> actions </td>
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



