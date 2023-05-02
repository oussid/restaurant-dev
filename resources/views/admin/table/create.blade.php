@extends('layouts.admin')

@section('content')

<div class="resource-create">
    <div class="breadcrum">
        <a href="{{route('table.index')}}" class="breadcrum-link">
            Tables
        </a> / 
        <a href="{{route('table.create')}}" class="breadcrum-link">
            Create Table
        </a>
    </div>

    <form action="{{route('table.store')}}" method="POST" class="resource-form">
        @csrf
        <div class="resource-grid-inputs">
            <div>
                <div class="form-label">
                    Number <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('number')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="number" placeholder="Table number" value="{{old('number')}}">
            </div>
            <div>
                <div class="form-label">
                    Floor <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('floor')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="floor" placeholder="Table floor" value="{{old('floor')}}">
            </div>
            <div>
                <div class="form-label">
                    Postion <span class="required">*</span>
                </div>
                <div class="form-error">
                    @error('position')
                        {{$message}}
                    @enderror
                </div>
                <input type="text" name="position" placeholder="Table postion" value="{{old('position')}}">
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