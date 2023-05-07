@if ((Auth::user() && Auth::user()->role))

<div class="home-carousel">
    @forelse ($banners as $banner)

    <div class="home-carousel-slide {{ $loop->index == 0 ? 'active' : ''}}" style="background-image: url('{{asset($banner->image)}}'); ">
        <div class="home-carousel-slide-text">
            <h2>{{$banner->subtitle}}</h2>
            <h1>{{$banner->title}}</h1>
        </div>
        @if ($banner->cta_button)
            <button onclick="window.location.href ='{{$banner->cta_url}}' " class="home-carousel-slide-btn">
                {{$banner->cta_button}} <i class="fa-solid fa-arrow-right"></i>
            </button>
        @endif
    </div>

    @empty
        <div class="home-carousel-empty">
            <h3>
                [NO SLIDES TO SHOW]
            </h3>
            <p>Access your admin pannel and add slides in the <a href="{{route('banner.create')}}">banners</a> section.</p>
        </div>
    @endforelse


    @if ($banners->count()>0)
        <button class="home-carousel-next-btn"><i class="fa-solid fa-chevron-right"></i></button>
        <button class="home-carousel-prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
    @endif
</div>

@elseif(((Auth::user() && Auth::user()->role != 2)  && $banners->count() > 0) || (!Auth::user() && $banners->count() > 0))

<div class="home-carousel">
    @foreach ($banners as $banner)
    {{-- {{dd($banner->image)}} --}}
    <div class="home-carousel-slide {{ $loop->index == 0 ? 'active' : ''}}" style="background-image: url('{{asset($banner->image)}}'); ">
        <div class="home-carousel-slide-text">
            <h2>{{$banner->subtitle}}</h2>
            <h1>{{$banner->title}}</h1>
        </div>
        @if ($banner->cta_button)
            <button onclick="window.location.href ='{{$banner->cta_url}}' " class="home-carousel-slide-btn">
                {{$banner->cta_button}} <i class="fa-solid fa-arrow-right"></i>
            </button>
        @endif
    </div>
    @endforeach

        <button class="home-carousel-next-btn"><i class="fa-solid fa-chevron-right"></i></button>
        <button class="home-carousel-prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
</div>


@else

<div></div>


@endif


@if ($banners->count()>0)
    <script src="js/carousel.js"></script>
@endif
