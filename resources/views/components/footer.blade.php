<div class="footer-container">
   <footer>
    <div class="footer-main">
        <div class="footer-main-identity">
            <div class="footer-main-identity-logo">
                @if ($config->logo)
                    <img width="100px"  src="{{asset($config->logo)}}" alt="Logo" >
                @else
                    <h2>[LOGO]</h2>    
                @endif
            </div>
            <div class="footer-main-identity-slogan">
                {{$config->slogan}}
            </div>
            <div class="footer-main-identity-description">
                {{$config->description}}
            </div>
        </div>
        <div class="footer-main-links">
            <div class="footer-main-links-section">
                <h2 class="footer-main-links-section-title">
                    About
                </h2>
                <div class="footer-main-links-section-tabs">
                    <a href="#">About us</a>
                    <a href="#">Our team</a>
                    <a href="#">Testimonials</a>
                </div>
            </div>
            <div class="footer-main-links-section">
                <h2 class="footer-main-links-section-title">
                    Legal
                </h2>
                <div class="footer-main-links-section-tabs">
                    <a href="#">Privacy policy</a>
                    <a href="#">Refund policy</a>
                    <a href="#">Terms and conditions</a>
                </div>
            </div>
            <div class="footer-main-links-section">
                <h2 class="footer-main-links-section-title">
                    Pages
                </h2>
                <div class="footer-main-links-section-tabs">
                    <a href="#">Home</a>
                    <a href="#">Products</a>
                    <a href="#">Table booking</a>
                    <a href="#">FAQs</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="footer-copyright">{{$config->name}} © 2023. All rights reserved</p>
    </div>
</footer> 
</div>
