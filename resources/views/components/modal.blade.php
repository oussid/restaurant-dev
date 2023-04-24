<div class="modal-container modal"  id="{{$modalId}}">
    <script>
        console.log('id from MODAL', "{{$modalId}}");
    </script>
    <div  class="modal-box">
        {{$slot}}
    </div>
</div>
<script src="{{asset('js/modal.js')}}"></script> 