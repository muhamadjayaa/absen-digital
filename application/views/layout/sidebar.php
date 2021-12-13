<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <?php if ($this->session->userdata('role_id') == 1) : ?>
                <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="rounded mx-auto d-block">
                        <img src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" alt="Profile Image" width="100" class="rounded-circle" /></a>
                    <div class="text-center"><?= $user['nama_lengkap'] ?></div>
                    <div class="text-center"><?= $user['jabatan'] ?></div>
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-home"></span></div>
                            Dashboard Admin
                        </a>
                        <a class="nav-link" href="<?= base_url('datapegawai'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-users"></span></div>
                            Data Pegawai
                        </a><a class="nav-link" href="<?= base_url('absensi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-user-check"></span></div>
                            Presensi Pegawai
                        </a>
                        </a><a class="nav-link" href="<?= base_url('settingapp'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-cog"></span></div>
                            Settings Aplikasi
                        </a>
                    </div>
                </div>
            <?php elseif ($this->session->userdata('role_id') == 2) : ?>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="<?= base_url(''); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-tachometer-alt"></span></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?= base_url('absensiku'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-chart-area"></span></div>
                            Data Kehadiran
                        </a>
                        <div class="sb-sidenav-menu-heading">Moderator</div>
                        </a><a class="nav-link" href="<?= base_url('absensi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-user-check"></span></div>
                            Absensi Pegawai
                        </a>
                    </div>
                </div>
                
            <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                    <a class="rounded mx-auto d-block">
                        <img src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" alt="Profile Image" width="90" class="rounded-circle" /></a>
                    <div class="text-center"><?= $user['nama_lengkap'] ?></div>
                    <div class="text-center"><?= $user['jabatan'] ?></div>
                        <a class="nav-link" href="<?= base_url(''); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-home"></span></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?= base_url('presensi'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-camera"></span></div>
                            Presensi
                        </a>
                        <a class="nav-link" href="<?= base_url('absensiku'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-table"></span></div>
                            Tabel Kegiatan
                        </a>
                        <a class="nav-link" href="<?= base_url('cetak_lap'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-print"></span></div>
                            Cetak Laporan
                        </a>
                        <a class="nav-link" href="<?= base_url('profile'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-user"></span></div>
                            Profil Saya
                        </a>
                        <a class="nav-link" href="<?= base_url('buat_lap'); ?>">
                            <div class="sb-nav-link-icon"><span class="fas fa-file-medical"></span></div>
                            Buat Laporan
                        </a>
                    </div>
                </div>
            <?php endif; ?>
            
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>