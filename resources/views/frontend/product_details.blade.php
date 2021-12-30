<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @include('frontend.layouts.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    @foreach ($product as $product)

    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img src="{{ $product->photo }}" alt="">
                </div>
            </div>
         <div class="col-lg-4">
            <div class="right-content">
                <h4>{{ $product->title }}</h4>
                <span class="price">{{ $product->price }}</span>
                <span>{{ $product->description }}</span>
                <div class="quote">
                    <i class="fa fa-quote-left"></i><p>{{ $product->size }}</p>
                </div>
                <div class="quantity-content">
                    <div class="left-content">
                        <h6>{{ $product->stock }}</h6>
                    </div>
                    <div class="right-content">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div ><a href="#" data-quantity="1" data-product-id="{{ $product->id }}"  class="add_to_cart" id="add_to_cart{{ $product->id }}" type="button" >Add To Cart</a></div>
                </div>
            </div>
        </div>
      
            </div>
        </div>
    </section>
    @endforeach

    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    @include('frontend.layouts.footer')
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <script src="assets/js/quantity.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    {{--  sweetaert  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    <script>
        $(document).on('click','.add_to_cart',function(e){
            e.preventDefault();
            var product_id= $(this).data('product-id');

            var product_qty= $(this).data('quantity');

            var token = "{{ csrf_token() }}";
            var path = "{{ route('cart.store') }}";
            $.ajax(
                {
                    url: path,
                    type: "POST",
                    datatype : "JSON",
                    data:{
                        product_id: product_id,
                        product_qty: product_qty,
                        _token:token,
                    },
                    beforeSend:function(){
                        $('#add_to_cart'+ product_id).html('<i class="fa fa-spinner fa-spin"></i>Loading..');
                    },
                    comlete:function(){
                        $('#add_to_cart'+ product_id).html('<i class="fa fa-cart-plus"></i>Add Cart..');

                    },
                    success:function(data){
                        console.log(data);
                        if(data['status']){
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

  </body>

</html>
