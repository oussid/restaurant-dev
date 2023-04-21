@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="resource-breadcrum">
        Delivery Men / Add new
    </div>

    <form action="{{route('delivery.store')}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        <div class="resource-grid-inputs">
            <div>
                <div class="form-label">
                    Name <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="name" placeholder="Full name" value="{{old('name')}}">
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
                <input type="email"  name="email" placeholder="Email address" value="{{old('email')}}">
            </div>
            <div>
                <div class="form-label">
                    Phone <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('mobile')
                        {{$message}}
                    @enderror
                </div>
                <input type="phone"  name="mobile" placeholder="Phone number" value="{{old('mobile')}}">
            </div>
            <div>
                <div class="form-label">
                    Image (5mb Max) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('profile_pic')
                        {{$message}}
                    @enderror
                </div>
                <input type="file" name="profile_pic">
            </div>

            <div>
                <div class="form-label">
                    Password <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="password" placeholder="Password" value="{{old('password')}}">
            </div>
            <div>
                <div class="form-label">
                    Password confirmation <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </div>
                <input type="text"  name="password_confirmation" placeholder="Confirm password" value="{{old('password_confirmation')}}">
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