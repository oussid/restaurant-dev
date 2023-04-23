
<div class="modal-container"  id="modal">
    <div  class="modal-box">
            <form wire:submit.prevent  action="" method="POST" class="resource-form" >
                @csrf
                <div class="resource-form-head">
                    Edit Profile
                </div>
                <div class="resource-grid-inputs">
                    <div class="full-width-resource-field">
                        <div class="profile-pic-container">
                            @if ($image)
                                <img class="large-round-img" src="{{ $image->temporaryUrl() }}">
                            @else
                                <img class="large-round-img" src="{{'storage/'.Auth::user()->profile_pic}}">
                            @endif

                            <div  class="profile-pic-edit" id="adminEditPfp">
                                <i class="fa-solid fa-camera"></i>  
                            </div>
                            <div class="profile-pic-dropdown " id="adminPfpDropdown">
                                <input name="profile_pic" type="file" wire:model='image' id="img-upload" >
                                <label for="img-upload" class="profile-pic-dropdown-tab">
                                    Upload photo
                                </label>
                                <div class="profile-pic-dropdown-tab">
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
                        <input  type="text" name="name" placeholder="Product name" value="{{old('name')}}">
                    </div>
                    
                    
                    <div >
                        <div class="form-label">
                            Phone 
                        </div>
                        <div class="form-error">
                            @error('description')
                            {{$message}}
                            @enderror
                        </div>
                        <input type="phone" name="mobile" placeholder="Phone number" value="{{old('mobile')}}">                    </div>
                    </div>
                    
                    <div>
                        <div class="form-label">
                            Email <span class="required">*</span>
                        </div>
                        <div class="form-error">
                            @error('category_id')
                                {{$message}}
                            @enderror
                        </div>
                        <input type="email" name="email" placeholder="Email address" value="{{old('email')}}">
                    </div>
                <div class="resource-form-bottom">
                    <div class="left"></div>
                    <div class="middle"></div>
                    <div class="right">
                        <button wire:click.prevent="" type="reset" class="resource-form-cancel-btn">Cancel</button>
                        <button wire:click.stop.prevent="save" type="submit" class="resource-form-submit-btn">Save</button>
                    </div>
                </div>
            </form>

    </div>
    
</div>
