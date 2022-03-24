<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/tro.jpg') }}" class="img-circle elevation-2" alt="User Image" >
        </div>
        <div class="info">
          <a href="#" class="d-block">Strawberries Golden Hotel</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('kamar.index')}}" class="nav-link">
                  
                  <p>Kamar</p>
                </a>
              </li>
            </ul>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link">
             
              <p>
                Fasilitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('faskamar.index')}}" class="nav-link">
                  
                  <p>Fasilitas Kamar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fashotel.index')}}" class="nav-link">
                  
                  <p>Fasilitas Hotel</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>