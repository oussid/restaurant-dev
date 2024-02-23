@extends('layouts.admin')

@section('content')

<div class="resource-create js-adjust-width">
    <div class="breadcrum">
        <a href="{{route('product.index')}}" class="breadcrum-link">
            Products
        </a> / 
        <a href="{{route('product.create')}}" class="breadcrum-link">
            Add New
        </a>
    </div>

    <form action="{{route('product.store')}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        <div class="resource-grid-inputs">
            <div>
                <div class="form-label">
                    Category <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('category_id')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <select name="category_id" >
                    <option value="">Select</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <div class="form-label">
                    Name <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('name')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="text" name="name" placeholder="Product name" value="{{old('name')}}">
            </div>
            <div>
                <div class="form-label">
                    Price <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('price')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <input type="text" id="numberInp" name="price" placeholder="Product price" value="{{old('price')}}">
            </div>

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

            <div class="full-width-resource-field">
                <div class="form-label">
                    Description 
                </div>
                <div class="form-error">
                    @error('description')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>
                <textarea name="description"  rows="5" placeholder="Short description">{{old('description')}}</textarea>
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

<script>
    // validating inserted
    document.getElementById('numberInp').addEventListener('input', (e)=>{
        let addedVal = e.target.value.slice(-1)
        let previousVal = e.target.value.slice(0,-1)
        let digitPattern = /^\d{1}$/
        let periodPattern = /\./

        // only one period (.) in the field
        if(addedVal == '.' && !periodPattern.test(previousVal)){
            e.target.value = previousVal + addedVal
        }
        //
        else if(!digitPattern.test(addedVal)){
            e.target.value = previousVal
        }
    })

    // validating pasted value
    document.getElementById('numberInp').addEventListener('paste', (e)=>{
        event.preventDefault();
        let pastedVal = event.clipboardData.getData('text/plain');
        let pattern = /^[+-]?\d+(\.\d+)?$/

        if(pattern.test(pastedVal)){   
            e.target.value += pastedVal
        }
    })
</script>

@endsection