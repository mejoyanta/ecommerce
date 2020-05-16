<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="{{ asset('backend/assets/dist/img/AdminLTELogo.png') }}" alt="Airi Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text"><b>Ai</b>ri</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('backend/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          {{ Auth::user()->name }}
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
        {{-- Dashboard nav section --}}
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>

            <p>Dashboard</p>
          </a>
        </li>
        {{-- End Dashboard nav section --}}
        {{-- Category nav section --}}
        <li class="nav-item has-treeview {{ Request::routeIs(['categories.create', 'categories.index']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::routeIs(['categories.create', 'categories.index']) ? 'menu-open' : '' }}">
            <i class="nav-icon fas fa-copyright"></i>
            {{-- <i class="nav-icon fas fa-ball-pile"></i> --}}
            <p>
              Categories
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('categories.create') }}" class="nav-link {{ Request::routeIs('categories.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create New Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('categories.index') }}" class="nav-link {{ Request::routeIs('categories.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>All Category List</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Category nav section --}}
        {{-- Brand nav section --}}
        <li class="nav-item has-treeview {{ Request::routeIs(['brands.create', 'brands.index']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::routeIs(['brands.create', 'brands.index']) ? 'menu-open' : '' }}">
            {{-- <i class="fab fa-btc"></i> --}}
            <i class="nav-icon fas fa-award"></i>
            <p>
              Brands
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('brands.create') }}" class="nav-link {{ Request::routeIs('brands.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create New Brand</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('brands.index') }}" class="nav-link {{ Request::routeIs('brands.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>All Brand List</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Brand nav section --}}
        
        {{-- Tag nav section --}}
        {{-- <li class="nav-item has-treeview {{ Request::routeIs(['tags.create', 'tags.index']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::routeIs(['tags.create', 'tags.index']) ? 'menu-open' : '' }}">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Tags
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('tags.create') }}" class="nav-link {{ Request::routeIs('tags.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create New Tag</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('tags.index') }}" class="nav-link {{ Request::routeIs('tags.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>All Tag List</p>
              </a>
            </li>
          </ul>
        </li> --}}
        {{-- End Tag nav section --}}
        
        {{-- Product nav section --}}
        <li class="nav-item has-treeview {{ Request::routeIs(['products.create', 'products.index']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::routeIs(['products.create', 'products.index']) ? 'menu-open' : '' }}">
            <i class="nav-icon fab fa-product-hunt"></i>
            <p>
              Products
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('products.create') }}" class="nav-link {{ Request::routeIs('products.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create New Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('products.index') }}" class="nav-link {{ Request::routeIs('products.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>All Product List</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Product nav section --}}
        {{-- Orders nav section --}}
        <li class="nav-item has-treeview {{ Request::routeIs(['orders.pending', 'orders.delivered']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::routeIs(['orders.pending', 'orders.delivered']) ? 'menu-open' : '' }}">
            <i class="nav-icon fas fa-cubes"></i>
            <p>
              Orders
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('orders.pending') }}" class="nav-link {{ Request::routeIs('orders.pending') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('orders.delivered') }}" class="nav-link {{ Request::routeIs('orders.delivered') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Delivered Orders</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Orders nav section --}}
        
      </ul>
    </nav>
  </div>
</aside>