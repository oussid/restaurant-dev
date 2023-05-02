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
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>                   
                    <th>Phone Number</th>                    
                    <th>Actions</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td> {{$customer->id}} </td>
                        <td> {{$customer->name}} </td>
                        <td> {{$customer->email}} </td>
                        <td> {{$customer->mobile}} </td>
                        <td class="col-action-btns">
                            <a href="{{route('customer.show', ['customer'=>$customer->id])}}">
                                <button class="details-resource-btn"><i class="fa-solid fa-list"></i></button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='7'>No customers to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$customers->links('pagination-links')}}
    </div>
</div>  