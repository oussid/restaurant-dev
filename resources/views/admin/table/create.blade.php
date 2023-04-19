@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="resource-breadcrum">
        Tables / Add new
    </div>

    <form action=""  class="resource-form">
        <div class="resource-grid-inputs">
            <div>
                <div class="form-error">
    
                </div>
                <div class="form-label">
                    Number <span class="required">*</span>
                </div>
                <input type="text" name="number" placeholder="Table number">
            </div>
            <div>
                <div class="form-error">
                    
                </div>
                <div class="form-label">
                    Floor <span class="required">*</span>
                </div>
                <input type="text" name="floor" placeholder="Table floor">
            </div>
            <div>
                <div class="form-error">
                    
                </div>
                <div class="form-label">
                    Postion <span class="required">*</span>
                </div>
                <input type="text" name="position" placeholder="Table postion">
            </div>
        </div>

        <div class="resource-form-bottom">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right">
                <button type="reset" class="resource-form-cancel-btn">Reset</button>
                <button type="submit" class="resource-form-submit-btn">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection