<form wire:submit.prevent="save"  action="" method="POST" class="resource-form" >
    @csrf
    <div class="resource-form-head">
        Edit Profile
    </div>
    <div class="resource-grid-inputs">
        <div class="full-width-resource-field">
            <div class="profile-pic-container">
                @if ($image || $tempImage)
                <img class="large-round-img" src="{{asset($tempImage)}}">
                @elseif(Auth::user()->profile_pic)
                <img class="large-round-img" src="{{asset(Auth::user()->profile_pic)}}">
                @else
                <img class="large-round-img" src="{{asset('images/profile_placeholder.jpg')  }}">
                @endif

                <div class="loader-container" wire:loading wire:target="image">
                    <x-spinner />
                </div>
                <div  class="profile-pic-edit" id="adminEditPfp">
                    <i class="fa-solid fa-camera"></i>  
                </div>
                <div class="profile-pic-dropdown " id="adminPfpDropdown">
                    <input  name="profile_pic" type="file" wire:model='image' id="img-upload" >
                    <label for="img-upload" class="profile-pic-dropdown-tab">
                        Upload photo
                    </label>
                    <div wire:click="deleteImage" class="profile-pic-dropdown-tab">
                        Remove photo
                    </div>
                </div>
            </div>
            <div class="form-error">
                @error('image')
                {{$message}}
                @enderror
            </div>
        </div>
        <div>
            <div class="form-label">
                Name <span class="required">*</span>
            </div>
            <div class="form-error">
                @error('name')
                {{$message}}
                @enderror
            </div>
            <input  type="text" wire:model="name" placeholder="Full name" value="fdfsf">
        </div>
        
        
        <div >
            <div class="form-label">
                Phone 
            </div>
            <div class="form-error">
                @error('mobile')
                {{$message}}
                @enderror
            </div>
            <input type="phone" wire:model="mobile" placeholder="Phone number" value="{{Auth::user()->mobile}}">                    </div>
        </div>
        
        <div>
            <div class="form-label">
                Email <span class="required">*</span>
            </div>
            <div class="form-error">
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <input type="email" wire:model="email" placeholder="Email address" value="{{Auth::user()->email}}">
        </div>
    <div class="resource-form-bottom">
        <div class="left"></div>
        <div class="middle"></div>
        <div class="right">
            <button wire:click.prevent="clear" onclick="hideModal('{{$modalId}}')" type="reset" class="resource-form-cancel-btn">Cancel</button>
            <button  type="submit" class="resource-form-submit-btn">Save</button>
        </div>
    </div>
</form>