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

    @yield('content')


@include('frontend.layouts.footer')
@include('frontend.layouts.script')



    



  </body>
</html>