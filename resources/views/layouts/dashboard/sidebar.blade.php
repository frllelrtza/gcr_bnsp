   <!-- Sidebar Start -->
   <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="text-nowrap logo-img">
          <img class="ms-5" src="{{ asset('assets/dashboard/images/logos/employee.png') }}" width="120" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/pegawai" aria-expanded="false">
              <span>
                <i class="ti ti-briefcase"></i>
              </span>
              <span class="hide-menu">Pegawai</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/profile" aria-expanded="false">
              <span>
                <i class="ti ti-settings "></i>
              </span>
              <span class="hide-menu">Setelan</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>