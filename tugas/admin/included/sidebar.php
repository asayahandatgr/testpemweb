<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="<?= $url ?>img/nf-removebg.png" alt="NF Logo" class="brand-image img-circle elevation-3 m-auto" style="opacity: 8;" />
        <span class="brand-text font-weight-light m-2"><b>Puskesmas - App</b></span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $url ?>dist\img\avatar.png" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item menu-open">
                    <a href="<?= $url ?>index.php" class="nav-link">
                        <i class="nav-icon fas fa-chevron-circle-right"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url ?>kelurahan" class="nav-link">
                        <i class="nav-icon fa fa-building"></i>
                        <p>Kelurahan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url ?>pasien" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Pasien</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url ?>periksa" class="nav-link">
                        <i class="nav-icon fa fa-stethoscope"></i>
                        <p>Periksa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url ?>paramedik" class="nav-link">
                        <i class="nav-icon fa fa-user-md"></i>
                        <p>Paramedik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url ?>unitkerja" class="nav-link">
                        <i class="nav-icon fa fa-hospital"></i>
                        <p>Unit Kerja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url ?>login.html" class="nav-link">
                        <i class="nav-icon bg-danger p-1 fas fa-sign-out-alt rounded-circle"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>