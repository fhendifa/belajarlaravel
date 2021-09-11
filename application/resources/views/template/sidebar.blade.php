<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/images (1).jfif')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PasarKito</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/images.jfif')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">BARU</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/category/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/product/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                State
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/state')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama State</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/state/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah State</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                City
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/city')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/city/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah City</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Bank
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/bank')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/bank/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Bank</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kurir
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/kurir')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nama Kurir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kurir/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kurir</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Keranjang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/keranjang')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keranjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/keranjang/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Keranjang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('/transaction')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaction
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>