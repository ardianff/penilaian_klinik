<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <?php echo greeting() ?>, <strong><?php echo $this->session->userdata('nama_user'); ?></strong>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="<?php echo site_url(
								'profile'
							); ?>" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo site_url(
								'auth/logout'
							); ?>" class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>