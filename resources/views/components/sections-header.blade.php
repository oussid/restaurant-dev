<style>
    .sections-header-container{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 8rem;
        width: 100%
    }
    .header-title{
        font-family: 'Dancing Script', cursive;
        font-size: 60px;
    }
    .header-button{
        color: var(--secondary);
        border: 1px solid var(--secondary);
        text-decoration: none;
        padding: 6px;
        border-radius: 3px;
        transition: ease-in-out .3s;
    }
    .header-button:hover {
        background: var(--secondary);
        color:white;
        cursor: pointer;
    }
</style>
<div class="sections-header-container">
    <h1 class="header-title">{{ $title }}</h1>
    <a href={{ $buttonUrl }} class="header-button">{{ $button }}</a>
</div>
