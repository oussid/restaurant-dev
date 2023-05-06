@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="breadcrum">
        <a href="{{route('admin.config')}}" class="breadcrum-link">
            Configure your restaurant website
        </a>
    </div>

    <form action="{{route('admin.configure')}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="resource-grid-inputs">
            <div class="full-width-resource-field">
                @if ($config->logo)
                    <img width="50px" class="navbar-logo" src="{{asset($config->logo)}}" alt="Logo" >
                @else
                    <h2>[LOGO]</h2>    
                @endif
            </div>
            <div>
                <div class="form-label">
                    Logo (5mb Max) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('logo')
                        {{$message}}
                    @enderror
                </div>
                <input type="file" name="logo" >
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
                <input type="text" name="name" placeholder="Restaurant Name" value="{{$config ? $config->name : 'Restaurant'}}">
            </div>

            <div>
                <div class="form-label">
                    City <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('city')
                        {{$message}}
                    @enderror
                </div>
                <input type="text"  name="city" placeholder="Restaurant City" value="{{$config ? $config->city : ''}}">
            </div>
            <div>
                <div class="form-label">
                    Address <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('address')
                        {{$message}}
                    @enderror
                </div>
                <input type="text"  name="address" placeholder="Restaurant Address" value="{{$config ? $config->address : ''}}">
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
                <input type="email" name="email" placeholder="Restaurant Email" value="{{$config ? $config->email : ''}}">
            </div>
            <div>
                <div class="form-label">
                    Phone <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('phone')
                        {{$message}}
                    @enderror
                </div>
                <input type="text"  name="phone" placeholder="Restaurant Phone Number" value="{{$config ? $config->phone : ''}}">
            </div>
{{-- colors --}}
            <div class="custom">
                <div class="form-label">
                    Primary Color <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('Primary Color')
                        {{$message}}
                    @enderror
                </div>
                <input type="color" name="primary_color" placeholder="Website Primary Color" value="{{$config ? $config->primary_color : ''}}">
            </div>
            <div  class="custom">
                <div class="form-label">
                    Secondary Color <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('secondary_color')
                        {{$message}}
                    @enderror
                </div>
                <input type="color" name="secondary_color" placeholder="Website Secondary Color" value="{{$config ? $config->secondary_color : ''}}">
            </div>
            
            <div class="full-width-resource-field">
                <div class="form-label">
                    Slogan <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('slogan')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="slogan" placeholder="Restaurant Slogan" value="{{$config ? $config->slogan : ''}}">
            </div>
            <div class="full-width-resource-field">
                <div class="form-label">
                    Description (256 characters max) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('description')
                        {{$message}}
                    @enderror
                </div>
                <textarea name="description"  rows="5" placeholder="Restaurant Description">{{$config ? $config->description : ''}}</textarea>
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


@endsection