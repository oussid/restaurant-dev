@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('inbox.index')}}" class="breadcrum-link">
                Inboxes
            </a>
        </div>
        
    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('inboxes-table')
    </div>
</div>

@endsection