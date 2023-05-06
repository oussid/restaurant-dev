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
                    <th>Table Number</th>
                    <th>Table Position</th>
                    <th>Table Floor</th>                   
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($tables as $table)
                    <tr>
                        <td> {{$table->id}} </td>
                        <td> {{$table->number}} </td>
                        <td> {{$table->position}} </td>
                        <td> {{$table->floor}} </td>
                        <td class="col-action-btns">
                            <a href="{{route('table.edit', ['table'=>$table->id])}}">
                                <button class="details-resource-btn success"><i class="fa-solid fa-pen-to-square"></i></i></button>
                            </a>

                            <form action="{{route('table.destroy', ['table'=>$table->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="details-resource-btn danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        
                    </tr>
                @empty
                    <tr><td colspan='6'>No tables to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$tables->links('pagination-links')}}
    </div>
</div>  