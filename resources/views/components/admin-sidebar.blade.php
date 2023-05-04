<div class="admin-sidebar">
    <div class="admin-sidebar-top">
        <p class="admin-sidebar-top-title">
            Menu
        </p>
    </div>
    <div class="admin-sidebar-tabs ">
        <a href="{{route('admin.dashboard')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'dashboard' ? 'active' : ''}}">
            <i class="fa-solid fa-house-user"></i>
            Dashboard
        </a >

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

        <a href="{{route('delivery.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'delivery' ? 'active' : ''}}">
            <i class="fa-solid fa-motorcycle"></i>
            Delivery Men
        </a >

        <a href="{{route('testimonial.index')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'testimonial' ? 'active' : ''}}">
            <i class="fa-solid fa-star"></i>
            Testimonials
        </a >

        <a href="{{route('admin.list')}}" class="admin-sidebar-tab {{getPageName(Request::url()) === 'list' ? 'active' : ''}}">
            <i class="fa-solid fa-user"></i>
            Admins
        </a >

        <a href="#" class="admin-sidebar-tab">
            <i class="fa-solid fa-gear"></i>
            Settings
        </a >
    </div>
</div>
