<!DOCTYPE html>
<html lang="zxx">
    @include('frontend.layouts.head')
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
    @include('frontend.layouts.header')
	<!--/ End Header -->

    @yield('content')

	<!-- Start Footer Area -->
@include('frontend.layouts.footer')
	<!-- /End Footer Area -->

	@include('frontend.layouts.script')
</body>
</html>
