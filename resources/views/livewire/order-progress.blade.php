<div class="order-progress-container">
    @if ($order->status == 0)
    <div class="order-progress-status red">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-x"></i>
        </div>
        <div class="order-progress-status-label">
            Canceled
        </div>
    </div>
    @else
    <div class="order-progress-status {{$order->status >= -1 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-fire"></i>
        </div>
        <div class="order-progress-status-label">
            Placed
        </div>
    </div>

    <div class="order-progress-status {{$order->status >= 1 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-fire"></i>
        </div>
        <div class="order-progress-status-label">
            Preparing
        </div>
    </div>

    <div class="order-progress-status  {{$order->status >= 2 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-motorcycle"></i>
        </div>
        <div class="order-progress-status-label">
            On the way
        </div>
    </div>

    <div class="order-progress-status  {{$order->status >= 3 ? 'active' : ''}}">
        <div class="order-progress-status-circle">
            <i class="fa-solid fa-check"></i>
        </div>
        <div class="order-progress-status-label">
            Completed
        </div>
    </div>
    @endif

    
</div>
