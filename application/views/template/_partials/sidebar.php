<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/img/favicon.png" class="img center" alt="User Image">

            </div>
            <div class="info">
                <a href="<?php echo base_url('dashboard'); ?>" class="d-block">Sistem Penilaian Klinik</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo site_url(
    'dashboard'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link <?=$this->uri->segment(1) == 'penilaian_pratama' || $this->uri->segment(1) == 'penilaian_utama' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Penilaian Klinik
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url(
    'penilaian_pratama'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'penilaian_pratama' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                <i class="fa-solid fa-list-check nav-icon"></i>
                                <p>Pratama/Utama Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url(
    'penilaian_utama'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'penilaian_utama' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                <i class="fa-solid fa-list-check nav-icon"></i>
                                <p>Pratama/Utama Gigi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_pratama' || $this->uri->segment(1) == 'rincian_penilaian_utama' || $this->uri->segment(1) == 'rincian_penilaian_utama_kedua' || $this->uri->segment(1) == 'rincian_penilaian_pratama_kedua' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Rincian Penilaian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_pratama' || $this->uri->segment(1) == 'rincian_penilaian_pratama_kedua' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                <!--    <i class="far fa-circle nav-icon"></i> -->
                                <p>
                                    Klinik Pratama/Utama Umum
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('rincian_penilaian_pratama') ?>"
                                        class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_pratama' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                        <i class="fa-solid fa-list-dropdown nav-icon"></i>
                                        <p>Rincian Penilaian Form 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('rincian_penilaian_pratama_kedua') ?>"
                                        class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_pratama_kedua' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                        <i class="fa-solid fa-list-dropdown nav-icon"></i>
                                        <p>Rincian Penilaian Form 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_utama' || $this->uri->segment(1) == 'rincian_penilaian_utama_kedua' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                <p>
                                    Klinik Pratama/Utama Gigi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('rincian_penilaian_utama') ?>"
                                        class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_utama' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                        <i class="fa-solid fa-list-dropdown nav-icon"></i>
                                        <p>Rincian Penilaian Form 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('rincian_penilaian_utama_kedua') ?>"
                                        class="nav-link <?=$this->uri->segment(1) == 'rincian_penilaian_utama_kedua' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                        <i class="fa-solid fa-list-dropdown nav-icon"></i>
                                        <p>Rincian Penilaian Form 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('laporan_penilaian'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'laporan_penilaian' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                        <i class="nav-icon fa-solid fa-calendar-lines-pen"></i>
                        <p>
                            Laporan Penilaian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(
    'tim'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'tim' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Anggota Penilai
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link <?=$this->uri->segment(1) == 'user' || $this->uri->segment(1) == 'profile' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url(
    'user'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                <i class="fa-regular fa-people-line nav-icon"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url(
    'profile'
); ?>" class="nav-link <?=$this->uri->segment(1) == 'profile' || $this->uri->segment(1) == '' ? 'active' : ''?>">
                                <i class="fa-duotone fa-user-hair nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a onclick="logoutConfirm('<?php echo site_url('auth/logout') ?>')" href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout


                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>