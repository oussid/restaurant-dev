<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<style>
    :root{
        --primary:black;
        --secondary:#f82647;
        --secondary-hover:#bd1c34;
        --border:rgba(0, 0, 0, 0.16);
    }
    @import url('https://fonts.googleapis.com/css2?family=Heebo&family=Lato&family=Lobster&family=Open+Sans&family=Playfair+Display&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

        font-family: 'Lato', sans-serif;
    }
    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 75px;
        background: var(--primary);
        border-bottom:4px solid var(--secondary);

    }
    .nav-section{
        flex: 1;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        color: white;
        gap: 2rem;

    }
    .nav-section>a:hover{
        color: var(--secondary);
    }
    .nav-section>a{
        text-decoration: none;
        color: white;
        transition: .3s;

    }
    .nav-section>img{
        height:80%
    }
        </style>
<nav>
    <div class="nav-section"><img  src="https://www.freepnglogos.com/uploads/kfc-png-logo/camera-kfc-png-logo-0.png" alt=""/></div>
    <div class="nav-section">
        <a href="#">Home</a>
        <a href="#">Menu</a>
        <a href="#">Book a table</a>
        <a href="#">Help & contact us</a>
    </div>
    <div class="nav-section">
        <a href="#">Search</a>
    </div>
</nav>
