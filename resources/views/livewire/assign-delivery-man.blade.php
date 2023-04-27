<form wire:submit.prevent="save"  action="" method="POST" class="resource-form" >
    @csrf
    <div class="resource-form-head">
        Assign order to a delivery man
    </div>
    <div class="resource-grid-inputs">
        <div class="full-width-resource-field">
            <div class="form-label">
                Order Number
            </div>
            <input  type="text" disabled value="{{$orderNumber}}">
        </div>
        
        
        <div class="full-width-resource-field">
            <div class="form-label">
                Delivery Man <span class="required">*</span>
            </div>
            <div class="form-error">
                @error('deliveryMan')
                    {{$message}}
                @enderror
            </div>
            <select wire:model="deliveryManId" >
                <option value="">Select</option>
                @foreach ($deliveryMen as $deliveryMan)
                    <option value="{{$deliveryMan->id}}">
                        {{$deliveryMan->name}}
                    </option>
                @endforeach
            </select>
        </div>
        
        
    <div class="resource-form-bottom">
        <div class="left"></div>
        <div class="middle"></div>
        <div class="right">
            <button wire:click.prevent="clear" onclick="hideModal('{{$modalId}}')" type="reset" class="resource-form-cancel-btn">Close</button>
            <button   type="submit" class="resource-form-submit-btn">Save</button>
        </div>
    </div>
</form>