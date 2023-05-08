<div class="loader-container">
    <div class="logo-loader" style="background-image: url('/@if($config->logo){{ $config->logo }}@endif')">
    </div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
<script>
setTimeout(() => {
    var loader = document.querySelector('.loader-container')
        loader.style.display = 'none';
}, 3000);
</script>
