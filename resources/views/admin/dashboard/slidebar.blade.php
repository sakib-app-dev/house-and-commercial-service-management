      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('/admin') }}/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('/admin') }}/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        
        <ul class="nav">
          
          <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/show-user') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Show Users</span>
                </a>
          </li>
          <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('add_category') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Add Category</span>
                </a>
          </li>
          <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('list_category') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">List Category</span>
                </a>
          </li>
          <li class="nav-item menu-items">
                <a class="nav-link" href="">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Requests</span>
                </a>
          </li>
          <li class="nav-item menu-items">
                <a class="nav-link" href="{{Route('admin-logout') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Log Out</span>
                </a>
          </li>
        </ul>
      </nav>