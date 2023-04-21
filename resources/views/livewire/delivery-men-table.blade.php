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
                    <th>#</th>
                    <th>Photo</th>
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
                        <td>
                            <img class="mini-round-img" src="{{asset($deliveryMan->profile_pic)}}" alt="Profile picture">
                        </td>
                        <td> {{$deliveryMan->name}} </td>
                        <td> {{$deliveryMan->email}} </td>
                        <td> {{$deliveryMan->mobile}} </td>
                        <td> 
                            <div class="col-action-btns">
                                <a href="{{route("delivery.edit", ["delivery"=>$deliveryMan->id])}}">
                                    <button class="edit-resource-btn" >
                                        <i class="fa-solid fa-pen-to-square"></i>   
                                    </button>
                                </a>
    
                                <form action="{{route("delivery.destroy", ["delivery"=>$deliveryMan->id])}}" method="POST">
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
                    <tr><td colspan='7'>No delivery men to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$deliveryMen->links('pagination-links')}}
    </div>
</div>  