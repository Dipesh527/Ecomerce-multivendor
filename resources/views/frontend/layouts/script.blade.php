	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>


        $(document).on('click','.cart_remove',function(e){
        e.preventDefault();
        var cart_id = $(this).data('id');

        var token =  "{{ csrf_token() }}";
        var path =  "{{ url('cart/delete') }}";

        $.ajax({
        url: path,
        type: "POST",
        dataType: "JSON",
        data:{
            cart_id: cart_id,
            _token: token,
        },

        success:function(data){
            console.log(data);
            $(' body #header-ajax').html(data['header']);
            if(data['status'])
            {
                swal({
                title: "Good job!",
                text: data['message'],
                icon: "success",
                button: "Aww yiss!",
            });

            }
        }
        });
        });


</script>
<script>
        $(document).on('click','.add_cart',function(e){
            e.preventDefault();
            var product_id = $(this).data('product-id');
            var product_qty = $(this).data('quantity');

            var token =  "{{ csrf_token() }}";
            var path =  "{{ url('cart/store') }}";

            $.ajax({
            url: path,
            type: "POST",
            dataType: "JSON",
            data:{
                product_id: product_id,
                product_qty: product_qty,
                _token: token,
            },

            success:function(data){
                console.log(data);
                $(' body #header-ajax').html(data['header']);
                if(data['status'])
                {
                    swal({
                    title: "Good job!",
                    text: data['message'],
                    icon: "success",
                    button: "Aww yiss!",
                });

                }
            }
            });
        })
</script>


