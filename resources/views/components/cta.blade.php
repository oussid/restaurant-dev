<style>
    .cta-container{

        height: 425px;
        width: 100%;
        gap: 2rem;
        background: url('https://single-restaurant.gravityinfotech.net/storage/app/public/admin-assets/images/about/booknow_bg_image-637393cd7c886.png');
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
    }
    .cta-text-section>h2{
        color: var(--secondary);
        font-family: 'Dancing Script', cursive;
        font-size: 70px;
    }
    .cta-text-section>h1{
        font-size: 80px;
    }
    .cta-text-section>a{
        text-decoration: none;
        color: white;
        background:var(--secondary);
        padding: 6px;
        border-radius: 3px;
        transition: ease-in-out .3s;
    }
    .cta-text-section>a:hover{
        background:var(--secondary-hover);
    }
    .cta-text-section{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        backdrop-filter:invert(3%);
        flex-direction: column;
    }
</style>
<div class="cta-container">
    <div class="cta-text-section">
        <h2>Book a table</h2>
        <h1>Make a Reservation</h1>
        <a href="/booking">Book Now</a>
    </div>
</div>
