@if ($testimonials->count() > 0)
<div id="testimonials" class="swiper swiper2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach ($testimonials as $testimonial)
        <div class="testimonial swiper-slide">
            <a href="{{$testimonial->url}}"> <img class="testimonial-profile" src="{{$testimonial->image}}" alt="Profile image"></a>
            <div class="testimonial-details">
                <a href="{{$testimonial->url}}" class="testimonial-details-name">{{$testimonial->name}}</a>
            </div>
            <div class="testimonial-text"> 
                <i class="fa-solid fa-quote-left"></i>  
                {{$testimonial->text}}
                <i class="fa-solid fa-quote-right"></i>
            </div>
        </div>
      @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination swiper-pagination2"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-prev2"></div>
    <div class="swiper-button-next swiper-button-next2"></div>
  </div>
@endif

