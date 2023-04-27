<div>
@if (Session::has('success'))
<script>
    toastr.options = {
        progressBar: true,
        closeButton: true,
    }
    toastr.success("{{Session::get('success')}}")
</script>
@endif
</div>