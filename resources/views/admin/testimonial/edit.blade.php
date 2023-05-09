@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="breadcrum">
        <a href="{{route('testimonial.index')}}" class="breadcrum-link">
            Testimonials
        </a> / 
        <a href="{{route('testimonial.edit', ['testimonial'=>$testimonial->id])}}" class="breadcrum-link">
            Update 
        </a>
    </div>

    <form action="{{route('testimonial.update', ['testimonial' => $testimonial->id])}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                <input type="text" name="name" placeholder="Author name" value="{{$testimonial->name}}">
            </div>

            <div>
                <div class="form-label">
                    Date <span class="required">*</span>
                </div>
                
                <div class="form-error">
                    @error('created_at')
                        {{$message}}
                    @enderror
                </div>
                <input type="date" name="created_at" placeholder="Product price" value="{{$testimonial->created_at->toDateString()}}">
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
                <input type="text" name="url" placeholder="Testimonial URL" value="{{$testimonial->url}}">
            </div>
            

            <div class="full-width-resource-field">
                <div class="form-label">
                    Testimonial <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('text')
                        {{$message}}
                    @enderror
                </div>
                <textarea name="text"  rows="5" placeholder="Testimonial text">{{$testimonial->text}}</textarea>
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