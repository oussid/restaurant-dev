const nextBtn = document.querySelector('.home-carousel-next-btn')
const prevBtn = document.querySelector('.home-carousel-prev-btn')
const slides = document.querySelectorAll('.home-carousel-slide')
// find active slide index
let activeSlide = 0
slides.forEach((slide, i)=>{
    if(slide.classList.contains('active')){
        activeSlide = i
    }
})

// next slide
const nextSlide = ()=>{
    clearInterval(intervalId);
    if(activeSlide< slides.length-1){
        slides[activeSlide].classList.remove('active')
        activeSlide++
        slides[activeSlide].classList.add('active')
    }
    else{
        slides[activeSlide].classList.remove('active')
        activeSlide = 0
        slides[activeSlide].classList.add('active')
    }
    startInterval()
}

// previous slide
const prevSlide = ()=>{
    clearInterval(intervalId);
    if(activeSlide != 0){
        slides[activeSlide].classList.remove('active')
        activeSlide--
        slides[activeSlide].classList.add('active')
    }
    else{
        slides[activeSlide].classList.remove('active')
        activeSlide = slides.length-1
        slides[activeSlide].classList.add('active')
    }
    startInterval()
}

// auto slide
function startInterval() {
    intervalId = setInterval(nextSlide, 5000);
  }

startInterval()

nextBtn.addEventListener('click', ()=>{
    nextSlide()
})

prevBtn.addEventListener('click', ()=>{
    prevSlide()
})