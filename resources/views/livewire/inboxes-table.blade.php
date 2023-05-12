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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>                   
                    <th>Message</th>                   
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($inboxes as $inbox)
                    <tr>
                        <td> {{$inbox->id}} </td>
                        <td> {{$inbox->first_name}} </td>
                        <td> {{$inbox->last_name}} </td>
                        <td> {{$inbox->email}} </td>
                        <td> {{$inbox->message}} </td>
                        <td class="col-action-btns">
                            <a href="mailto:{{$inbox->email}}">
                                <button class="details-resource-btn success"><i class="fa-solid fa-reply"></i></i></i></button>
                            </a>

                            <form action="{{route('inbox.destroy', ['inbox'=> $inbox->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="details-resource-btn danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='60'>No inboxes to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$inboxes->links('pagination-links')}}
    </div>
</div>  