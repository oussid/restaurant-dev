@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="resource-breadcrum">
        Categories / Add new
    </div>

    <form action="{{route('category.store')}}" method="POST" class="resource-form" enctype="multipart/form-data">
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
                <input type="text" name="name" placeholder="Category Name" value="{{old('name')}}">
            </div>

            <div>
                
            </div>

            <div>
                <div class="form-label">
                    Image (250x250) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('image')
                        {{$message}}
                    @enderror
                </div>
                <input type="file" name="image" >
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