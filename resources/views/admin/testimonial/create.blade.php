@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="breadcrum">
        <a href="{{route('testimonial.index')}}" class="breadcrum-link">
            Testimonials
        </a> / 
        <a href="{{route('testimonial.create')}}" class="breadcrum-link">
            Add New Testimonial
        </a>
    </div>

    <form action="{{route('testimonial.store')}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        <div class="resource-grid-inputs">
            <div>
                <div class="form-label">
                    Photo (5mb Max) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('image')
                        {{$message}}
                    @enderror
                </div>
                <input type="file" name="image" >
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
                <input type="text" name="name" placeholder="Author name" value="{{old('name')}}">
            </div>

            <div>
                <div class="form-label">
                    Date <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('date')
                        {{$message}}
                    @enderror
                </div>
                <input type="date" name="date" placeholder="Product price" value="{{old('date')}}">
            </div>
            
            <div>
                <div class="form-label">
                    URL <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('url')
                        {{$message}}
                    @enderror
                </div>
                <input type="url" name="url" placeholder="Testimonial URL" value="{{old('url')}}">
            </div>
            

            <div class="full-width-resource-field">
                <div class="form-label">
                    Testimonial <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('test')
                        {{$message}}
                    @enderror
                </div>
                <textarea name="text"  rows="5" placeholder="Testimonial text">{{old('text')}}</textarea>
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