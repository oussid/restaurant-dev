@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
<x-banner><h1>Search <span>products</span></h1></x-banner>
    @livewire('products-search')
@endsection
