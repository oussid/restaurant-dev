<div>
   <div class="admin-nav">
    <div class="admin-nav-left">
        Admin
    </div>
    <div class="admin-nav-center">

    </div>
    <div class="admin-nav-right">
        {{-- {{dd(Auth::user()->profile_pic)}} --}}
        <div id="navProfile" class="admin-nav-right-profile">
            <img src="{{ Auth::user()->profile_pic ? asset('storage/' . Auth::user()->profile_pic) : asset('images/profile_placeholder.jpg') }}" alt="Profile Picture" class="mini-round-img"/>
            <div class="admin-nav-right-profile-name">
                {{Auth::user()->name}} 
                <i class="fa-solid fa-caret-down"></i>
            </div>

            <div id="dropdown" class="admin-nav-right-profile-dropdown">
                <a href="/" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-arrow-pointer"></i> Visit site
                </a>
                <div id="editProfile" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-user"></i> Edit profile
                </div>
                <div class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-key"></i> Change password
                </div>
                <a href="{{route('admin.logout')}}" class="admin-nav-right-profile-dropdown-tab">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>
    </div>
</div>

<x-modal>
    @livewire('profile-form')
</x-modal>

<script>
    // profile dropdown
    const dorpdown = document.getElementById('dropdown')
    const navProfile = document.getElementById('navProfile')
    let visiblity = false   

    navProfile.addEventListener('click', ()=>{
        visiblity = !visiblity
        dorpdown.style.display = visiblity ? 'flex' : 'none'
    })

    document.addEventListener('click', (event) => {
        if (!dorpdown.contains(event.target) && !navProfile.contains(event.target)) {
            
            visiblity = false
            dorpdown.style.display = 'none';
        }
        });
</script> 

</div>
