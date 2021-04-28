<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/favicon.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light text-yellow">Insansandang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
          <img src="img/user.png" class="img-circle elevation-2" alt="UserImage">
          <p> {{ Auth::user()->name }}</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt">Keluar</i>
                <form id="logout-form" action="{{ route('logout') }}"
                method="POST" style="display: none;">
                @csrf
              </form>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Order GGG Warehouse 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('barcodes.index')}}" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                  <p>Table Order</p>
                </a>
              </li>
            </ul>
          </li>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Memo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('memos.index')}}" class="nav-link">
                  <i class="fas fa-envelope nav-icon"></i>
                  <p>Buat Memo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('masuks.index')}}" class="nav-link">
                  <i class="fas fa-envelope nav-icon"></i>
                  <p>Memo Masuk</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>