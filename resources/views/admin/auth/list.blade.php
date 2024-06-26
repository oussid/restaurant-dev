@extends('layouts.admin')

@section('content')

<div class="resource-index">
    <div class="resource-index-top">
        <div class="breadcrum">
            <a href="{{route('admin.list')}}" class="breadcrum-link">
                Admins
            </a>
        </div>
    </div>

    <div class="resource-index-main js-adjust-width">
        @livewire('users-table', [
            'role' => 2, 
            'emptyMessage' => 'No admins to show',
            'hasImageColumn' => true,
            'resourceName' => 'admin',
        ])
    </div>
</div>

@endsection