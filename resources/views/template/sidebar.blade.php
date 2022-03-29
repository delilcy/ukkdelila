<aside class="main-sidebar sidebar elevation-4" style="background-color: #ff9696;">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #ff9696;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/strawberries-removebg-preview (1).png') }}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <p class="d-block font-weight-bold">Strawberries Hotel</p>
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
        @if(Auth::user()->roles[0]['name'] == 'admin')
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
        @elseif(Auth::user()->roles[0]['name'] == 'resepsionis')
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">

                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('resepsionis.index')}}" class="nav-link">

                                <p>Reservasi</p>
                            </a>
                        </li>
                    </ul>
        </nav>
        @endif
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
