
<nav class="main-navbar">
    <img class="navbar-logo" src="{{asset('images/burger-logo.png')}}" alt="Logo">
    <div class="main-navbar-center">
       <div href="#" class="main-navbar-center-item">
         <a href="#">HOME</a>
       </div>
       <div href="#" class="main-navbar-center-item">
         <a href="#">MENU</a>
       </div>
       <div href="#" class="main-navbar-center-item">
         <a href="/booking">BOOK A TABLE</a>
       </div>
       <div href="#" class="main-navbar-center-item">
         <a href="#">CONTACT</a>
       </div>
    </div>
    <div class="main-navbar-right">
         <div class="main-navbar-right-left">
             <a href="#" class="main-navbar-right-left-item border-right">
                 <i class="fa-solid fa-magnifying-glass"></i>
             </a>
             <a href="#" class="main-navbar-right-left-item">
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
 </nav>
