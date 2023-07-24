<?php require 'sbarlib.php' ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #323232!important;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="img/logo.png" alt="PT.AES Logo" class="brand-image img-circle elevation-3" style="opacity: 1;">
        <span class="brand-text font-weight-semibold">PT. AES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="img/user-samplepic.webp" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Username</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search"
                    style="background-color:#323232;">
                <div class="input-group-append">
                    <button class="btn btn-sidebar" style="background-color:#323232;!important">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="../Admin-Dashboard (PHP)/AdminDashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-down right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="detail.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Detail</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../Admin-Dashboard Comp Profile (PHP)/comp-profile.php" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Company Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="edit-contact-us.php" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            Company Contact
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../Admin-Dashboard Comp Profile (PHP)/brand.php" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Brand Partner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="transaksi.php" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Transaction
                            <span class="badge badge-info right">3</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-down right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../Admin-Dashboard (PHP)/Adm-UserMenu.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Account</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Admin-Dashboard (PHP)/Adm-UserMenu2.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Detail</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admin
                            <i class="fas fa-angle-down right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>History</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../Landing Page/index.php" class="nav-link">
                        <i class="nav-icon fas fa-square"></i>
                        <p>
                            To Webpage
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../Login/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-right-from-bracket"></i>
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