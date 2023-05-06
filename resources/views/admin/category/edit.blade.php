@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="breadcrum">
        <a href="{{route('category.index')}}" class="breadcrum-link">
            Categories
        </a> / 
        <a href="{{route('category.edit')}}" class="breadcrum-link">
            Update
        </a>
    </div>

    <form action="{{route('category.update', ['category'=> $category->id])}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @method('PUT')
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
                <input type="text" name="name" placeholder="Category Name" value="{{$category->name}}">
            </div>

            <div>
                
            </div>

            <div>
                <div class="form-label">
                    Image (5mb max) <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('image')
                        {{$message}}
                    @enderror
                </div>
                <input type="file" name="image" >
                <img style="margin-top: 1rem" class="mini-square-img" src="{{asset($category->image)}}" alt="Category image">
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