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

    <form action="{{route('banner.update', ['banner'=>$banner->id])}}" method="POST" class="resource-form" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="resource-grid-inputs">
            <div>
                <div class="form-label">
                    Image (5mb Max) <span class="required">*</span>
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
                    Title <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('title')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="title" placeholder="Banner title" value="{{$banner->title}}">
            </div>

            <div class="full-width-resource-field">
                <div class="form-label">
                    Subtitle 
                </div>
                <div class="form-error">
                    @error('subtitle')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" id="numberInp" name="subtitle" placeholder="Banner subtitle" value="{{$banner->subtitle}}">
            </div>

            <div>
                <div class="form-label">
                   CTA Button
                </div>
                <div class="form-error">
                    @error('cta_button')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" id="numberInp" name="cta_button" placeholder="Button Text" value="{{$banner->cta_button}}">
            </div>

            <div>
                <div class="form-label">
                   CTA URL 
                </div>
                <div class="form-error">
                    @error('cta_url')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" id="numberInp" name="cta_url" placeholder="Call to action link" value="{{$banner->cta_url}}">
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