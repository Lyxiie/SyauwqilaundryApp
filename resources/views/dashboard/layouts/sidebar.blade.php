<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' :'' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profile*') ? 'active' :'' }}" aria-current="page" href="/dashboard/profile">
              <span data-feather="user"></span>
              Profile
            </a>
          </li>

        {{-- @if (auth()->user()->is_admin == 0) --}}
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pesanan*') ? 'active' :'' }}" href="/dashboard/pesanan">
              <span data-feather="file-text"></span>
              Pesanan
            </a>
          </li>
      </ul>
        {{-- @endif --}}


      @can('admin')

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1  text-muted">
          <span>Menu Pemilik</span>
      </h6>
      <ul class="nav flex-column">

      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' :'' }}" href="/dashboard/users">
                <span data-feather="users"></span>
                Data Pegawai
            </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/layanan*') ? 'active' :'' }}" href="/dashboard/layanan">
                <span data-feather="grid"></span>
                Data Layanan
            </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' :'' }}" href="/dashboard/laporan">
                <span data-feather="bar-chart-2"></span>
                Laporan Keuangan
            </a>
        </li>
      </ul>

      @endcan
    </div>
  </nav>
