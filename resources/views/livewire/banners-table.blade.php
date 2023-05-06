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
                    <th>Title</th>
                    <th>Subtitle</th>                   
                    <th>CTA</th>                    
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($banners as $banner)
                    <tr>
                        <td> {{$banner->id}} </td>
                        <td><img class="mini-rectangle-img" src="{{asset($banner->image)}}" alt="Banner Image"></td>
                        <td> {{$banner->title}} </td>
                        <td> {{$banner->subtitle}} </td>
                        <td> {{$banner->cta_url}} </td>
                        <td class="col-action-btns">
                            <a href="{{route('banner.edit', ['banner'=>$banner->id])}}">
                                <button class="details-resource-btn success"><i class="fa-solid fa-pen-to-square"></i></i></button>
                            </a>

                            <form action="{{route('banner.destroy', ['banner'=>$banner->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="details-resource-btn danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        
                    </tr>
                @empty
                    <tr><td colspan='6'>No banners to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$banners->links('pagination-links')}}
    </div>
</div>  