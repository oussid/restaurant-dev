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
                    <th>Author Photo</th>
                    <th>Author Name</th>
                    <th>Date</th>                   
                    <th>Testimonial</th>                   
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($testimonials as $testimonial)
                    <tr>
                        <td> {{$testimonial->id}} </td>
                        <td>
                            <img class="mini-round-img" src="{{asset($testimonial->image)}}" alt="Testimonial photo">
                        </td>
                        <td> {{$testimonial->name}} </td>
                        <td> {{$testimonial->created_at}} </td>
                        <td> {{$testimonial->text}} </td>
                        <td class="col-action-btns">
                            <a href="{{route('testimonial.edit', ['testimonial'=>$testimonial->id])}}">
                                <button class="details-resource-btn success"><i class="fa-solid fa-pen-to-square"></i></i></button>
                            </a>

                            <form action="{{route('testimonial.destroy', ['testimonial'=> $testimonial->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="details-resource-btn danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan='6'>No testimonials to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$testimonials->links('pagination-links')}}
    </div>
</div>  