<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('member') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Ubah Profil Member</span></a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kategori</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('member/mkategori/add') ?>">Tambah Kategori</a>
            <a class="dropdown-item" href="<?php echo site_url('member/mkategori') ?>">Daftar Kategori</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kecamatan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('member/mkecamatan/add') ?>">Tambah Kecamatan</a>
            <a class="dropdown-item" href="<?php echo site_url('member/mkecamatan') ?>">Daftar Kecamatan</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kelurahan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('member/mkelurahan/add') ?>">Tambah kelurahan</a>
            <a class="dropdown-item" href="<?php echo site_url('member/mgitkelurahan') ?>">Daftar kelurahan</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Galeri</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('member/galeri/add') ?>">Tambah Galeri</a>
            <a class="dropdown-item" href="<?php echo site_url('member/galeri') ?>">Daftar Galeri</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>