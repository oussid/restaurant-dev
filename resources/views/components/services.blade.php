<style>
.services-container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    margin: 3rem 0rem;
}
.service{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
    border: dashed var(--border) 3px;
    gap: 1rem;
    border-radius:8px;
    transition: ease-in-out .3s;
}
.service:hover{
    border: dashed var(--secondary) 3px;

}
.service-img{
    font-size: 50px;
    color: var(--secondary);
    transition: ease-in-out .3s;
}
.service-img:hover{
    transform: scale(1.1)
}
</style>
<div class="services-container">
    <div class="service">
        <i class="fa-solid fa-stopwatch-20 service-img"></i>
        <div class="service-text"><h2> Quick Delivery</h2><p>lorem ipsom dolor onos jeas fasope</p></div>
    </div>
    <div class="service">
        <i class="fa-solid fa-location-crosshairs service-img"></i>
        <div class="service-text"><h2>Live order tracking</h2><p>lorem ipsom dolor onos jeas fasope</p></div>
    </div>
    <div class="service">
        <i class="fa-solid fa-truck service-img"></i>
        <div class="service-text"><h2>Free Shipping</h2><p>lorem ipsom dolor onos jeas fasope</p></div>
    </div>
</div>
