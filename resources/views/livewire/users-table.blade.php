<div class="table-container">
    <div class="table-container-top">
        <div class="table-container-top-title">
            {{$title}}
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
                    @if ($hasImageColumn)
                        <th>Photo</th>
                    @endif
                    <th>Name</th>
                    <th>Email</th>                   
                    <th>Phone Number</th>                    
                    <th>Actions</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        @if ($hasImageColumn)
                        <td>
                            <img class="mini-round-img" src="{{asset($user->profile_pic ? $user->profile_pic : 'images/profile_placeholder.jpg' )}}" alt="">
                        </td>
                        @endif
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td>
                            @if ($user->mobile)
                            {{$user->mobile}}
                            @else
                            Not available
                            @endif
                        </td>
                        <td class="col-action-btns">
                            <a href="{{route('customer.show', ['customer'=>$user->id])}}">
                                <button class="details-resource-btn"><i class="fa-solid fa-list"></i></button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='7'>{{$emptyMessage}}</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$users->links('pagination-links')}}
    </div>
</div>  