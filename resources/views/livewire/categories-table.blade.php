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
                    <th>Category ID</th>
                    <th>Image</th>
                    <th>Category Label</th>                   
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td> {{$category->id}} </td>
                        <td>
                            <img class="mini-square-img" src="{{asset($category->image)}}" alt="Category Image">
                        </td>
                        <td> {{$category->name}} </td>
                        <td>
                            <div class="col-action-btns">
                                <a href="{{route("category.edit", ["category"=>$category->id])}}">
                                    <button class="edit-resource-btn" >
                                        <i class="fa-solid fa-pen-to-square"></i>   
                                    </button>
                                </a>
    
                                <form action="{{route("category.destroy", ["category"=>$category->id])}}" method="POST">
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
                    <tr><td colspan='7'>No categories to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$categories->links('pagination-links')}}
    </div>
</div>  



