<form wire:submit.prevent="save" action="" method="POST" class="resource-form" >
    @csrf
    <div class="resource-form-head">
        Change Password
    </div>
    <div class="resource-grid-inputs">
        <div class="full-width-resource-field">
            <div class="form-label">
                Password <span class="required">*</span>
            </div>
            <div class="form-error">
                @error('password')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <input type="text" wire:model="password"  placeholder="Password" value="{{old('password')}}">
        </div>
        <div class="full-width-resource-field">
            <div class="form-label">
                New Password <span class="required">*</span>
            </div>
            <div class="form-error">
                @error('newPassword')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <input type="text" wire:model="newPassword"  placeholder="New Password" value="{{old('newPassword')}}">
        </div>
        <div class="full-width-resource-field">
            <div class="form-label">
                Repeat New Password <span class="required">*</span>
            </div>
            <div class="form-error">
                @error('newPasswordConfirmation')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            <input type="text" wire:model="newPasswordConfirmation"  placeholder="Repeat New Password" value="{{old('newPasswordConfirmation')}}">
        </div>
        
    </div>
    <div class="resource-form-bottom">
        <div class="left"></div>
        <div class="middle"></div>
        <div class="right">
            <button wire:click.prevent onclick="hideModal('change-password-modal')" type="reset" class="resource-form-cancel-btn">Cancel</button>
            <button  type="submit" class="resource-form-submit-btn">Change</button>
        </div>
    </div>
</form>