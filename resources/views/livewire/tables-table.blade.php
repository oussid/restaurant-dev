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
                    <th>Table ID</th>
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
                        <td> actions </td>
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