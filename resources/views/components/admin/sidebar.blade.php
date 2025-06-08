   <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item {{ request()->routeIs("home") ? "active" : "" }}">
          <a class="nav-link" href="index.html">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Manajemen Produk</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link"  data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
            <i class="mdi mdi-briefcase menu-icon"></i>
            <span class="menu-title">Daftar Produk</span>
            <i class="menu-arrow"></i>
          </a>
            <div class="collapse" id="product">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Tabel Product </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Tambah data Product </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Manajemen Pegawai</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Daftar Pegawai</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Tabel Pegawai </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Perusahaan</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="docs/documentation.html">
            <i class="mdi mdi-city menu-icon"></i>
            <span class="menu-title">Profile Perusahaan</span>
          </a>
        </li>
        <li class="nav-item">
            <div class="nav-link">
            <form action="{{ route("logout") }}" method="post">
                @csrf
            <button class="btn bg-danger btn-sm menu-title" type="submit">Logout</button>
            </form>
            </div>
        </li>
      </ul>
    </nav>
