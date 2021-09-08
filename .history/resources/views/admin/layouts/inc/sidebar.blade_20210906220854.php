  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('home.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage home</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('home.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Skills
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('skill.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage skills</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('skill.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create skills</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Experiences
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('experience.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage experiences</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('experience.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create experiences</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('service.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage services</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('service.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create services</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Portfolio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('portfolio.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Portfolios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('portfolio.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Portfolios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('project.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage projects</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('project.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create projects</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Education
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('education.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage education</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('education.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create education</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>