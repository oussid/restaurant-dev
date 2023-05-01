<div class="order-progress-container">
    <div class="order-progress-status {{$status >= 0 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-bell"></i>
        </div>
        <div class="order-progress-status-label">
            Placed
        </div>
    </div>

    <div class="order-progress-status {{$status >= 1 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-fire"></i>
        </div>
        <div class="order-progress-status-label">
            Preparing
        </div>
    </div>

    <div class="order-progress-status  {{$status >= 2 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-motorcycle"></i>
        </div>
        <div class="order-progress-status-label">
            On the way
        </div>
    </div>

    <div class="order-progress-status  {{$status >= 3 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-check"></i>
        </div>
        <div class="order-progress-status-label">
            Completed
        </div>
    </div>
    
</div>
