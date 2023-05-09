@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="breadcrum">
        <a href="{{route('banner.index')}}" class="breadcrum-link">
            Banners
        </a> / 
        <a href="{{route('banner.create')}}" class="breadcrum-link">
            Add New
        </a>
    </div>

    <form action="{{route('banner.store')}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        <div class="resource-grid-inputs">
            <div>
                <div class="form-label">
                    Image (5mb Max) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('image')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="file" name="image" >
            </div>

            <div>
                <div class="form-label">
                    Title <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('title')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="text" name="title" placeholder="Banner title" value="{{old('title')}}">
            </div>

            <div class="full-width-resource-field">
                <div class="form-label">
                    Subtitle 
                </div>
                <div class="form-error">
                    @error('subtitle')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="text" name="subtitle" placeholder="Banner subtitle" value="{{old('subtitle')}}">
            </div>

            <div>
                <div class="form-label">
                   CTA Button
                </div>
                <div class="form-error">
                    @error('cta_button')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="text" id="numberInp" name="cta_button" placeholder="Button Text" value="{{old('cta_button')}}">
            </div>

            <div>
                <div class="form-label">
                   CTA URL 
                </div>
                <div class="form-error">
                    @error('cta_url')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="text" id="numberInp" name="cta_url" placeholder="Call to action link" value="{{old('cta_url')}}">
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