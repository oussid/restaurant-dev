
<div class="custom-pagination">
@if ($paginator->hasPages())
    <div class="custom-pagination-count">
        Showing {{$paginator->firstItem()}} to {{$paginator->lastItem()}} of {{$paginator->total()}} entries
    </div>
    <div class="custom-pagination-links">
        {{-- previous page (i didn't use if else because it somehow messes with the livewire's function and it doesnt work, weird)--}}
        <button  wire:click='{{!$paginator->onFirstPage()? 'previousPage': ''}}'  class="{{$paginator->onFirstPage()? 'disabled': ''}}">Prev</button>


            <!-- numbers -->
            @foreach ($elements as $element)
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <button class="active" wire:click="gotoPage({{$page}})">{{$page}}</button>
                @else
                <button  wire:click="gotoPage({{$page}})">{{$page}}</button>
                @endif
                @endforeach
                @endif
            @endforeach

        {{-- next page --}}
        <button wire:click='{{$paginator->hasMorePages()? 'nextPage': ''}}' class="{{!$paginator->hasMorePages()? 'disabled': ''}}">
            next
        </button>

    </div>
@endif
</div>
    
