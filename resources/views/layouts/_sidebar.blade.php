<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-left">

  <div data-simplebar class="h-100">

    <!--- Sidebar-menu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      {{-- Sekretariat --}}
      <ul class="left-menu list-unstyled" id="side-menu">
        <li class="menu-title">Sekretariat</li>
        <li class="{{ $title == 'Dashboard Sekretariat' ? 'mm-active' : '' }}">
          <a href="/sekre/dashboard/"><i class="mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
        </li>
        <li class="{{ $title == 'Notula' ? 'mm-active' : '' }}">
          <a href="/sekre/notula/" active><i class="mdi mdi-note-multiple"></i><span>Notula</span></a>
        </li>
        <li class="{{ $title == 'Surat Tugas' ? 'mm-active' : '' }}">
          <a href="/sekre/st/"><i class="mdi mdi-folder-open"></i><span>Surat Tugas</span></a>
        </li>
        <li class="{{ $title == 'Surat Keputusan' ? 'mm-active' : '' }}">
          <a href="/sekre/sk/"><i class="mdi mdi-folder-open"></i><span>Surat Keputusan</span></a>
        </li>
        {{-- <li class="{{ $title == 'Buku Ajar' ? 'mm-active' : '' }}">
          <a href="#"><i class="mdi mdi-book-education"></i><span>Buku Ajar</span></a>
        </li> --}}
        {{-- <li class="{{ $title == 'Peminjaman Ruang Rapat' ? 'mm-active' : '' }}"><a href="#"><i class="mdi mdi-library"></i><span>Peminjaman Ruang
              Rapat</span></a>
        </li> --}}

      </ul>
      {{-- SDM --}}
      <ul class="left-menu list-unstyled" id="side-menu">
        <li class="menu-title">SDM</li>
        <li class="{{ $title == 'Dashboard SDM' ? 'mm-active' : '' }}"><a href="/sdm/dashboard/"><i
              class="mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
        <li class="{{ $title == 'Data Dosen' ? 'mm-active' : '' }}"><a href="/sdm/data-dosen/"><i
              class="mdi mdi-account-box-multiple"></i><span>Data Dosen</span></a></li>
        <li class="{{ $title == 'Data TPA' ? 'mm-active' : '' }}"><a href="/sdm/data-tpa/"><i
              class="mdi mdi-account-box-multiple-outline"></i><span>Data TPA</span></a>
        </li>
        </li>
      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->
