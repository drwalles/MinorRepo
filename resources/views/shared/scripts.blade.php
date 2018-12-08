<script type='text/javascript' src="{{ asset('assets/js/jquery.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('assets/js/slim.min.js') }}"></script>--}}
<script type='text/javascript' src="{{ asset('assets/js/camera.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr-latest.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/fancybox/jquery.fancybox.pack.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/jquery.mobile.customized.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    jQuery(function() {

        jQuery('#camera_wrap_4').camera({
            height: '750',
            loader: 'bar',
            pagination: false,
            thumbnails: false,
            hover: false,
            opacityOnGrid: false,
            imagePath: 'public/assets/images/'
        });

    });
</script>
