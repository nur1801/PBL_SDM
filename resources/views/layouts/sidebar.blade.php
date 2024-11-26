<div class="sidebar">
    <!--- SidebarSearch Form-->
    <div class="form-inline mt-2">
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
        <li class="nav-item">
          <a href="{{ url('/')}}" class="nav-link {{($activeMenu == 'dashboard')? 'active' : ''}}">
            <i class="nav-icon fas fa-diagram-project"></i>
            <p>Dashboard</p>
          </a>
        </li>
        @if(auth()->user()->level == "admin")
        <li class="nav-header">Manage Pengguna</li>
          <li class="nav-item">
            <a href="{{ url('admin/user')}}" class="nav-link {{($activeMenu == 'user admin')? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>Daftar Pengguna</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/jenispengguna')}}" class="nav-link {{($activeMenu == 'user jenis')? 'active' : ''}}">
              <i class="nav-icon fa-solid fa-user-gear"></i>
              <p>Jenis Pengguna</p>
            </a>
          </li>
          <li class="nav-header">Data Kegiatan</li>
          <li class="nav-item">
            <a href="{{ url('admin/kegiatan')}}" class="nav-link {{($activeMenu == 'kegiatan admin')? 'active' : ''}}">
              <i class="nav-icon fa-regular fa-calendar-check"></i>
              <p>Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/jabatan')}}" class="nav-link {{($activeMenu == 'jabatan kegiatan')? 'active' : ''}}">
              <i class="nav-icon fa-regular fa-calendar-check"></i>
              <p>Jabatan Kegiatan</p>
            </a>
          </li>
          <li class="nav-header">Statistik</li>
          <li class="nav-item">
            <a href="{{ url('admin/statistik')}}" class="nav-link {{($activeMenu == 'statistik admin')? 'active' : ''}}">
              <i class="nav-icon fas fa-chart-simple"></i>
              <p>Statistik </p>
            </a>
          </li>
        @endif
        @if(auth()->user()->level == "dosen" && $activeMenu != "kegiatan anggota" && $activeMenu != "statistik anggota" && $activeMenu != "agenda" && $activeMenu != "kegiatan pic" && $activeMenu != "statistik pic")
        <li class="nav-header">Data Kegiatan</li>
          <li class="nav-item">
            <a href="{{ url('dosen/kegiatan')}}" class="nav-link {{($activeMenu == 'kegiatan dosen')? 'active' : ''}}">
              <i class="nav-icon fa-regular fa-calendar-check"></i>
              <p>Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
          <li class="nav-header">Kegiatan JTI</li>
            <li class="nav-item">
                <a href="{{ url('dosen/kegiatan/jti')}}" class="nav-link {{($activeMenu == 'kegiatan jti')? 'active' : ''}}">
                    <i class="nav-icon fa-regular fa-calendar-check"></i>
                    <p>Kegiatan JTI</p>
                </a>
            </li>
          <li class="nav-header">Statistik</li>
          <li class="nav-item">
            <a href="{{ url('dosen/statistik')}}" class="nav-link {{($activeMenu == 'statistik dosen')? 'active' : ''}}">
              <i class="nav-icon fas fa-chart-simple"></i>
              <p>Statistik </p>
            </a>
          </li>
        @endif
        @if(auth()->user()->level == "pimpinan")
        <li class="nav-header">Manage Pengguna</li>
          <li class="nav-item">
            <a href="{{ url('pimpinan/user')}}" class="nav-link {{($activeMenu == 'user pimpinan')? 'active' : ''}}">
              <i class="nav-icon far fas fa-users"></i>
              <p>Data Dosen</p>
            </a>
          </li>
        <li class="nav-header">Data Kegiatan</li>
          <li class="nav-item">
            <a href="{{ url('pimpinan/kegiatan')}}" class="nav-link {{($activeMenu == 'kegiatan pimpinan')? 'active' : ''}}">
              <i class="nav-icon fa-regular fa-calendar-check"></i>
              <p>Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('pimpinan/statistik')}}" class="nav-link {{($activeMenu == 'statistik pimpinan')? 'active' : ''}}">
              <i class="nav-icon fas fa-chart-simple"></i>
              <p>Statistik </p>
            </a>
          </li>
        @endif
        @if($activeMenu  == "kegiatan pic" || $activeMenu == "statistik pic" || $activeMenu == "agenda")
        <li class="nav-header">Data Kegiatan</li>
          <li class="nav-item">
            <a href="{{ url('dosenPIC/kegiatan')}}" class="nav-link {{($activeMenu == 'kegiatan pic')? 'active' : ''}}">
              <i class="nav-icon fa-regular fa-calendar-check"></i>
              <p>Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('progresKegiatan/index')}}" class="nav-link {{($activeMenu == 'agenda anggota pic')? 'active' : ''}}">
              <i class="nav-icon fas fa-solid fa-list-check"></i>
              <p>Progress Kegiatan </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{ url('dosenPIC/agendaAnggota')}}" class="nav-link {{($activeMenu == 'agenda anggota pic')? 'active' : ''}}">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>Agenda Anggota </p>
            </a>
          </li>
          @endif
          @if($activeMenu  == "kegiatan anggota" || $activeMenu == "statistik anggota" || $activeMenu == "agenda") 
        <li class="nav-header">Data Kegiatan</li>
          <li class="nav-item">
            <a href="{{ url('dosenAnggota/kegiatan')}}" class="nav-link {{($activeMenu == 'kegiatan anggota')? 'active' : ''}}">
              <i class="nav-icon fa-regular fa-calendar-check"></i>
              <p>Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('dosenAnggota/agenda')}}" class="nav-link {{($activeMenu == 'agenda')? 'active' : ''}}">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>Agenda Kegiatan </p>
            </a>
          </li>
          @endif
      </ul>
    </nav>
  </div>