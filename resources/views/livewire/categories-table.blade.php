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
                    <th>Image</th>
                    <th>Name</th>                   
                    <th>Description</th>                   
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
                        <td> {{$category->description}} </td>
                        
                        <td class="col-action-btns">
                            <a href="{{route('category.edit', ['category'=>$category->id])}}" >
                                @csrf
                                @method('DELETE')
                                <button class="details-resource-btn success"><i class="fa-solid fa-pen-to-square"></i></i></button>
                            </a>

                            <form action="{{route('category.destroy', ['category'=> $category->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="details-resource-btn danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='70'>No categories to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$categories->links('pagination-links')}}
    </div>
</div>  



