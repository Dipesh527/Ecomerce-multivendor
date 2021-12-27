<li class="nav-item nav-category">
    <span class="nav-link">Navigation</span>
</li>
  <li class="nav-item menu-items">
    <a class="nav-link" href="index.html">
      <span class="menu-icon">
        <i class="mdi mdi-speedometer"></i>
      </span>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
  <li class="nav-item menu-items">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
      <span class="menu-title">Banner Management</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ url('/banners') }}">Create Banner</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ url('/banners/store') }}">All banners</a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">edit Banner</a></li>
      </ul>
    </div>
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
      <span class="menu-title">Category Management</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ url('/categories/create') }}">Create Category</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ url('/categories') }}">All Caegories</a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">edit Category</a></li>
      </ul>
    </div>
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
      <span class="menu-title">Brand Management</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ url('/brands/create') }}">Create Category</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ url('/brands') }}">All Brands</a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">edit Category</a></li>
      </ul>
    </div>
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
      <span class="menu-title">Product Management</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ url('/products/create') }}">Create Category</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ url('/products') }}">All Brands</a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">edit Category</a></li>
      </ul>
    </div>
  </li>
