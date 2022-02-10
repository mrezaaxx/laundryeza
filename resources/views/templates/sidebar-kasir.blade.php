<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="transaksi" class="nav-link {{ request()->is('transaksi') ? 'bg-success' : '' }}">
              <i class="far fa-sticky-note"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
    </ul>
</nav>