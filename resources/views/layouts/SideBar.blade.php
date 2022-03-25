<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">User</a>
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
        <li class="nav-item menu-open">
          <a href="{{route('services')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Services
              <i class="nav-icon fas fa-th"></i>
            </p>
          </a>
         
        </li>
        <li class="nav-item">
          <a href="{{route('clients')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              clients
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{route('docteurs')}}" class="nav-link active">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Docteurs
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
        </li>
        
        
        <li class="nav-item">
          <a href="{{route('appoinment')}}" class="nav-link active">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              appoinment
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('events')}}" class="nav-link active">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              events
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" onclick="document.getElementById('logoutform').submit();" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              <form action ="{{route('logout')}}" id="logoutform" method="post">
              @csrf
              </form>
              deconnecter
              <span class="right badge badge-danger">Out</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>