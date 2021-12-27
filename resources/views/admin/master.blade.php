<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.layouts.head')
</head>
<body>
   <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
        @include('admin.layouts.header')


         @include('admin.layouts.sidebar')
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
         @include('admin.layouts.nav')
         @yield('content')
      </div>

   </div>
   @include('admin.layouts.script')
   @yield('scripts')
    
    
</body>
</html>