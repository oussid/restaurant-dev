<div class="admin-sidebar">
    <div class="admin-sidebar-top">
        <p class="admin-sidebar-top-title">
            {{$config->name}}
        </p>
    </div>
    <div class="admin-sidebar-tabs">
        <a href="{{route('admin.dashboard')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'dashboard' ? 'active' : ''}}">
            <i class="fa-solid fa-house-user"></i>
            Dashboard
        </a >
        
    <div class="admin-sidebar-tabs-group">
        <div class="admin-sidebar-tabs-group-title">
            MANAGEMENT
        </div>
        <a href="{{route('order.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'order' ? 'active' : ''}}">
            <i class="fa-solid fa-cart-shopping"></i>
            Orders
        </a >

        <a href="{{route('category.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'category' ? 'active' : ''}}">
            <i class="fa-solid fa-list"></i>
            Categories
        </a>
        <a href="{{route('product.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'product' ? 'active' : ''}}">
            <i class="fa-solid fa-burger"></i>
            Products
        </a>
    </div>
    
    <div class="admin-sidebar-tabs-group">
        <div class="admin-sidebar-tabs-group-title">
            CUSTOMERS
        </div>
        <a href="{{route('customer.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'customer' ? 'active' : ''}}">
            <i class="fa-solid fa-user-group"></i>
            Customers
        </a>

        <a href="{{route('booking.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'booking' ? 'active' : ''}}">
            <i class="fa-solid fa-calendar"></i>
            Bookings
        </a>
        
        <a href="{{route('table.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'table' ? 'active' : ''}}">
            <i class="fa-solid fa-chair"></i>
            Tables
        </a>
    </div>


    <div class="admin-sidebar-tabs-group">
        <div class="admin-sidebar-tabs-group-title">
            CONTENT
        </div>
        <a href="{{route('testimonial.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'testimonial' ? 'active' : ''}}">
            <i class="fa-solid fa-star"></i>
            Testimonials
        </a >
    
        <a href="{{route('banner.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'banner' ? 'active' : ''}}">
            <i class="fa-solid fa-sign-hanging"></i>
            Banners
        </a >
    </div>


    <div class="admin-sidebar-tabs-group">
        <div class="admin-sidebar-tabs-group-title">
            DELIVERY
        </div>
        <a href="{{route('delivery.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'delivery' ? 'active' : ''}}">
            <i class="fa-solid fa-motorcycle"></i>
            Delivery Men
        </a >
    </div>


    <div class="admin-sidebar-tabs-group">
        <div class="admin-sidebar-tabs-group-title">
            ADMIN
        </div>
        <a href="{{route('admin.list')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'list' ? 'active' : ''}}">
            <i class="fa-solid fa-user"></i>
            Admins
        </a >
        <a href="{{route('admin.config')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'configuration' ? 'active' : ''}}">
            <i class="fa-solid fa-gear"></i>
            Configuration
        </a >
    </div>




    </div>
</div>