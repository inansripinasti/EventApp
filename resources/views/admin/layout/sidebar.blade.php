      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">User</span>
                  <span class="text-secondary text-small">Admin@gmail.com</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard/jenisKeg') }}">
                <span class="menu-title">Jenis Kegiatan</span>
                <i class="mdi mdi-home-map-marker menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard/kegiatan') }}">
                <span class="menu-title">Kegiatan</span>
                <i class="mdi mdi-theater menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard/daftar') }}">
                <span class="menu-title">Pendaftaran</span>
                <i class="mdi mdi-script menu-icon"></i>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard/kategori') }}">
                <span class="menu-title">Kategori Peserta</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
        </nav>
        <!-- partial -->
        <div class="main-panel">