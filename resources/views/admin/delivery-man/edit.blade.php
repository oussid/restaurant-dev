@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="resource-breadcrum">
        Delivery Men / Update
    </div>

    <form action="{{route('delivery.update', ['delivery'=>$deliveryMan->id])}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                <input type="text" name="name" placeholder="Full name" value="{{$deliveryMan->name}}">
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
                <input type="email"  name="email" placeholder="Email address" value="{{$deliveryMan->email}}">
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
                <input type="phone"  name="mobile" placeholder="Phone number" value="{{$deliveryMan->mobile}}">
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
                <img style="margin-top: 1rem" class="mini-round-img" src="{{asset($deliveryMan->profile_pic)}}" alt="Profile picture">
            </div>

            

        </div>
        <div class="resource-form-bottom">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right">
                <button type="reset" class="resource-form-cancel-btn">Reset</button>
                <button type="submit" class="resource-form-submit-btn">Update</button>
            </div>
        </div>
</form>


@endsection