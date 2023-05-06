
<nav class="main-navbar" >
    @if ($config->logo)
        <img width="50px" class="navbar-logo" src="{{asset($config->logo)}}" alt="Logo" >
    @else
        <h2>[LOGO]</h2>    
    @endif
    <div class="main-navbar-center">
        <div href="#" class="main-navbar-center-item">
            <a href="/">HOME</a>
        </div>
        <div href="#" class="main-navbar-center-item ">
            <a  class="dropdown-tab">MENU <i class="fa-solid fa-caret-down dropdown-tab-arrow"></i></a>
            <div class="dropdown-menu" style="display: none">
                @foreach (App\Models\Category::all() as $ctg)
                    <div onclick="window.location.href = '/products/{{ $ctg->name }}'">{{ $ctg->name }}</div>
                @endforeach
            </div>
            <script>
                let dropdownTab = document.querySelector('.dropdown-tab');
                let dropdownMenu = document.querySelector('.dropdown-menu');
                let dropdownTabArrow = document.querySelector('.dropdown-tab-arrow');
                dropdownTab.addEventListener('click',()=>{
                    if(dropdownMenu.style.display == 'none'){
                        dropdownMenu.style.display = 'flex'
                        dropdownTabArrow.className = 'fa-solid fa-caret-up dropdown-tab-arrow'
                    }
                    else{
                        dropdownMenu.style.display = 'none'
                        dropdownTabArrow.className = 'fa-solid fa-caret-down dropdown-tab-arrow'
                    }
                })
            </script>
        </div>
        <div href="#" class="main-navbar-center-item">
            <a href="/booking">BOOK A TABLE</a>
        </div>
        <div href="#" class="main-navbar-center-item">
            <a href="/contact">CONTACT</a>
        </div>
        @if (Auth::check())
        <div href="#" class="main-navbar-center-item">
            <a href="/myorders">MY ORDERS</a>
        </div>
        @endif
    </div>

    <div class="main-navbar-right" >
         <div class="main-navbar-right-left" >
             <a href="/products" class="main-navbar-right-left-item border-right">
                 <i class="fa-solid fa-magnifying-glass"></i>
             </a>
             <a href="/cart" class="main-navbar-right-left-item">
                @livewire('cart-count')
                 <i class="fa-solid fa-cart-shopping"></i>
             </a>
         </div>
            @if (Auth::check())
                <div class="main-navbar-right-right">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @else
                <div class="main-navbar-right-right">
                    <button onclick="window.location.href='/login'">Login</button>
                </div>
            @endif
        </div>
    <div class="hamburger-icon">
        <div></div>
        <div></div>
        <div></div>
    </div>

                    <div class="mobile-navbar">
                        <div href="#" class="main-navbar-center-item ">
                            <a href="/">HOME</a>
                        </div>
                        <div href="#" class="main-navbar-center-item">
                            <a href="/products">MENU</a>
                        </div>
                        <div href="#" class="main-navbar-center-item">
                            <a href="/booking">BOOK A TABLE</a>
                        </div>
                        <div href="#" class="main-navbar-center-item">
                            <a href="/contact">CONTACT</a>
                        </div>
                        @if (Auth::check())
                        <div href="#" class="main-navbar-center-item">
                            <a href="/myorders">MY ORDERS</a>
                        </div>
                        @endif
                        <div class="mobile-nav-footer">
                            <div class="mobile-nav-footer-icons-container">
                                <a href="/products" class="main-navbar-right-left-item border-right">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="/cart" class="main-navbar-right-left-item mobile-navbar-right-left-item">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    @livewire('cart-count')
                                </a>
                            </div>
                            @if (Auth::check())
                            <div class="main-navbar-right-right">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </div>
                            @else
                            <div class="main-navbar-right-right">
                                <button onclick="window.location.href='/login'">Login</button>
                            </div>
                        @endif

                    </div>
                    </div>
                    <script>
                        let hamburgerMenu = document.querySelector(".hamburger-icon");
                        let mobileNav = document.querySelector(".mobile-navbar");
                        hamburgerMenu.addEventListener('click',()=>{
                            if(hamburgerMenu.className == "hamburger-icon"){
                                hamburgerMenu.className = "hamburger-icon hamburger-icon-clicked"
                                mobileNav.style.left = "0%"
                            }
                            else{
                                hamburgerMenu.className = "hamburger-icon"
                                mobileNav.style.left = "100%"
                            }
                        })
                    </script>
 </nav>
