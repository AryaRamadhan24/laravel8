        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar" style="z-index: 99999999;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('indexHome')}}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-file-archive"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-ARSIP<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('indexHome')}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu Tambah Layangan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-upload"></i>
            <span>Arsip</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('penyakit')}}">Daftar Penyakit</a>
                <a class="collapse-item" href="{{route('gejala')}}">Daftar Gejala</a>
                <a class="collapse-item" href="{{route('sapi')}}">Data Sapi</a>
                <a class="collapse-item" href="">Riwayat</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
                <span>Diagnosa</span>
        </a>
    </li>
    
    <!-- Divider -->



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->
