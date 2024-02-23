<?php 
    $dropdownId = uniqid();
    $editProfileModalId = uniqid();
?>

<div>
   <div class="admin-nav">
    <div class="admin-nav-left">
        <button class="menu-button" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
            <svg width="40" height="40" viewBox="0 0 100 100">
              <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
              <path class="line line2" d="M 20,50 H 80" />
              <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
          </button>
        <p class="hide-on-sidebar">Admin</p> 
    </div>
    <div class="admin-nav-center">

    </div>
    <div class="admin-nav-right hide-on-sidebar">
        {{-- {{dd(Auth::user()->profile_pic)}} --}}
        <div  class="admin-nav-right-profile dropdownBtn" onclick="toggleDropdown('{{$dropdownId}}')">
            <img src="{{ Auth::user()->profile_pic ? asset(Auth::user()->profile_pic) : asset('images/profile_placeholder.jpg') }}" alt="Profile Picture" class="mini-round-img"/>
            <div class="admin-nav-right-profile-name">
                {{Auth::user()->name}} 
                <i class="fa-solid fa-caret-down"></i>
            </div>

            <div id="{{$dropdownId}}" class="admin-nav-right-profile-dropdown dropdown">
                <a href="/" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-arrow-pointer"></i> Visit site
                </a>
                <div onclick="toggleModal('edit-profile-modal')"  id="editProfile" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-user"></i> Edit profile
                </div>
                <div onclick="toggleModal('change-password-modal')" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-key"></i> Change password
                </div>
                <a href="{{route('admin.config')}}" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-gear"></i> Settings
                </a>
                <a href="{{route('admin.logout')}}" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>
    </div>
</div>

<x-modal modalId="edit-profile-modal">
    @livewire('profile-form', ['modalId' => 'edit-profile-modal'])
</x-modal>

<x-modal modalId="change-password-modal">
    @livewire('change-password-form', ['modalId' => 'change-password-modal'])
</x-modal>

 

</div>
