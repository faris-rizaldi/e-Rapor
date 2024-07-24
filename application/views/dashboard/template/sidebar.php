<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?= base_url('dashboard') ?>">
                <img src="<?= base_url('assets/') ?>images/logo.png" alt="Logo" class="navbar-brand-img brand-sm img-fluid w-25">
            </a>            
        </div>                           
        <ul class="navbar-nav flex-fill w-100 mb-2 mt-2">
            <li class="nav-item w-100">
                <a href="<?= base_url('dashboard') ?>" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
        
        <p class="text-muted nav-heading mt-2 mb-1">
            <span>Menu Guru</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a href="<?= base_url('dashboard/tujuanpembelajaran') ?>" class="nav-link">
                    <i class="fe fe-16 fe-layers"></i>
                    <span class="ml-3 item-text">Tujuan Pembelajaran</span>
                </a>             
            </li>
            <li class="nav-item dropdown">
                <a href="#tp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-16 fe-folder-plus"></i>
                    <span class="ml-3 item-text">Nilai Rapor</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tp">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="<?= base_url('dashboard/inputnilairapor') ?>"><span class="ml-1 item-text">Input Nilai Rapor</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="<?= base_url('dashboard/importnilairapor') ?>"><span class="ml-1 item-text">Import Nilai Rapor</span></a>
                    </li>               
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-16 fe-inbox"></i>
                    <span class="ml-3 item-text">Cek Penilaian</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="<?= base_url('dashboard/statuspenilaian') ?>"><span class="ml-1 item-text">Status Penilaian</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="<?= base_url('dashboard/nilairapor') ?>"><span class="ml-1 item-text">Pencapaian Nilai Rapor</span></a>
                    </li>               
                </ul>
            </li>
        </ul>
        
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Pengaturan</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="<?= base_url('login') ?>">
                    <i class="fe fe-log-out fe-16"></i>
                    <span class="ml-3 item-text">Keluar</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>