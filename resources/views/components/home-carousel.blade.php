
<!-- Slider main container -->
@if ((Auth::user() && Auth::user()->role && $banners->count()==0))
    <div class="home-carousel-empty">
        <h3>
            [NO SLIDES TO SHOW]
        </h3>
        <p>Access your admin pannel and add slides in the <a href="{{route('banner.create')}}">banners</a> section.</p>
    </div>
@else
<div class="swiper swiper1">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @forelse ($banners as $banner)
        <div class="swiper-slide home-slide" style="background-image: url('{{asset($banner->image)}}'); ">
                <div class="slide-row">
                    <h2>{{$banner->subtitle}}</h2>
                    <h1>{{$banner->title}}</h1>
                    @if ($banner->cta_button)
                        <button onclick="window.location.href ='{{$banner->cta_url}}'">
                            {{$banner->cta_button}} <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    @endif
                </div>
            </div>
        @empty
            <div class="swiper-slide home-slide">
                slide
            </div>
        @endforelse
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination swiper-pagination1"></div>
  </div>
@endif