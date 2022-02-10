<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-align-left"></i>
              <p>
                Master                   
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="outlet" class="nav-link {{ request()->is('outlet') ? 'bg-success' : '' }}">
              <i class="fas fa-store-alt"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="paket" class="nav-link {{ request()->is('paket') ? 'bg-success' : '' }}">
              <i class="fas fa-cubes"></i>
              <p>
                Paket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="member" class="nav-link {{ request()->is('member') ? 'bg-success' : '' }}">
              <i class="far fa-address-card"></i>
              <p>
                Member
              </p>
            </a>
          </li>
        </ul>
        </li>
    </ul>
</nav>