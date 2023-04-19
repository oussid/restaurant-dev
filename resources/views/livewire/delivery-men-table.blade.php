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
                    <th>Delivery Man ID</th>
                    <th>Name</th>
                    <th>Email</th>                   
                    <th>Phone Number</th>                    
                    <th>Actions</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($deliveryMen as $deliveryMan)
                    <tr>
                        <td> {{$deliveryMan->id}} </td>
                        <td> {{$deliveryMan->name}} </td>
                        <td> {{$deliveryMan->email}} </td>
                        <td> {{$deliveryMan->mobile}} </td>
                        <td> actions </td>
                    </tr>
                @empty
                    <tr><td colspan='7'>No delivery men to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$deliveryMen->links('pagination-links')}}
    </div>
</div>  