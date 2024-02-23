<style>
    .cta-container{
        width: 100%;
        gap: 2rem;
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
        text-align: center
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

    @media only screen and (max-width: 520px){
        .cta-text-section>h1{
        font-size: 40px;
        text-align: center
    }
    }
</style>
<div class="cta-container" style="background-image:url('{{asset("images/food-pattern.jpg")}}')">
    <div class="cta-text-section">
        <h2>Book a table</h2>
        <h1>Make a Reservation</h1>
        <a href="/booking">Book Now</a>
    </div>
</div>
