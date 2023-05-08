<div>
@if (Session::has('success'))
<script>
    toastr.options = {
        progressBar: true,
        closeButton: true,
    }
    toastr.success("{{Session::get('success')}}")
</script>
@elseif(Session::has('error'))
<script>
    toastr.options = {
        progressBar: true,
        closeButton: true,
    }
    toastr.danger("{{Session::get('error')}}")
</script>
@endif
</div>