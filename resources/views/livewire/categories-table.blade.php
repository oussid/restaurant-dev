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
                        <td> {{$category->image}} </td>
                        <td> {{$category->label}} </td>
                        <td> actions </td>
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



