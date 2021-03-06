<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="/template/dist/img/SanggarTari.png" alt="SanggarTari" class="brand-image img-circle elevation-3"
            style="opacity: .8" width="35" height="40">
            <span class="brand-text font-weight-light">Grand Savira</span>
        </a> --}}

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Grand Savira</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
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
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <br>
                        <li class="nav-header">Dashboard</li>
                        <li class="nav-item">
                            <a href="/owner/dashboard" class="nav-link">
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <br>
                        <li class="nav-header">
                            Daftar Menu
                        </li>
                        <li class="nav-item">
                                <li class="nav-item">
                                    <a href="{{ url("/owner/perumahan/perumahan") }}" class="nav-link">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <p>Perumahan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/owner/foto_syarat/index') }}" class="nav-link">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        <p>Form Syarat Pembeli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url("/owner/syarat/syarat") }}" class="nav-link">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <p>Syarat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/deskripsi_rumah/deskripsi" class="nav-link">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <p>Deskripsi Rumah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/transaksi/index" class="nav-link">
                                        <i class="	fas fa-handshake" aria-hidden="true"></i>
                                        <p>Transaksi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/owner/update_role/index" class="nav-link">
                                        <i class="	fas fa-handshake" aria-hidden="true"></i>
                                        <p> Update Buyer</p>
                                    </a>
                                </li>
                        </li>

                        {{-- <br>
                        <li class="nav-header">Akun</li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/users') }}" class="nav-link">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{ url('/admin/role/') }}" class="nav-link">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                <p>
                                    Role
                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
