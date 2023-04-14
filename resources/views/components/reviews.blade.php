<style>
    .reviews-container{
        height: 425px;
        width: 100%;
        gap: 2rem;
        background: url('https://single-restaurant.gravityinfotech.net/storage/app/public/admin-assets/images/about/booknow_bg_image-637393cd7c886.png');
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
    }
    .reviews-section{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        backdrop-filter:invert(3%);
        flex-direction: column;
    }
    .reviews-border{
        display: flex;
        flex-direction:row;
        justify-content: center;
        align-items: center;
    
        width: 600px;
        height: 100%;

    }
    .review-card{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        transition: ease-in-out 1s;
        width: 100%;
        height: 100%;
        padding:2rem;
    }
    .review-img{
        width: 150px;
        height: 150px;
        border: 2px dashed var(--secondary);
        border-radius: 50%;
        background-image: url('https://single-restaurant.gravityinfotech.net/storage/app/public/admin-assets/images/profile/unknown.png');
        background-size:125%;
        background-repeat: no-repeat;
        background-position:center;
        padding: 1rem;
    }
    .review-name{
        font-size: 30px;
        color: var(--secondary)
    }
    .review-rating{
        font-size: 20px;
    }
    .review-rating>i{
        color: rgb(255, 196, 0);
    }
    .review-quote{
        font-size: 25px;
        text-align: center;
    }
    .review-quote>i{
        color: var(--secondary)
    }
</style>
<div class="reviews-container">
    <div class="reviews-section">
        <div class="reviews-border" >

                <div class="review-card">
                    <div class="review-img"></div>
                    <div class="review-name">John Clifford</div>
                    <div class="review-rating">5 <i class="fa-solid fa-star"></i></div>
                    <div class="review-quote"><i class="fa-solid fa-quote-left"></i> I really like the place somehow idk hoaef alojfa ljaef aj aldjfn ale aflnjalofen l. <i class="fa-solid fa-quote-right"></i></div>
                </div>

        </div>
    </div>
</div>

