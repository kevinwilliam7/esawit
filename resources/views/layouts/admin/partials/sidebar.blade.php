<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <div id="sidebar-menu">
            <ul class="metisMenu nav" id="side-menu">
                <li class="menu-title">MENU NAVIGASI</li>
                <li class="w-100 {{ Route::currentRouteName() ==='home' }}">
                    <a href="#">
                        <i class="fa fa-home"></i><span>Halaman Utama</span>
                    </a>
                </li>

                <li class="w-100 {{ str_contains(Route::currentRouteName(), 'perkebunan') ? 'active' : ''}}">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-tree"></i><span>Perusahaan Perkebunan</span>
                    </a>
                </li>

                <li class="w-100 menu-item">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-industry"></i><span>Pabrik</span>
                    </a>
                </li>

                <li class="w-100 menu-item">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-envira"></i><span>CSR</span>
                    </a>
                </li>

                <li class="w-100 menu-item">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-book"></i><span>SOP Perizinan</span>
                    </a>
                </li>

                <li class="w-100 menu-item {{ str_contains(Route::currentRouteName(), 'perundangan') }}">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-download"></i><span>Peraturan Perundangan</span>
                    </a>
                </li>

                <li class="w-100 menu-item">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-line-chart"></i><span>Harga TBS</span>
                    </a>                
                </li>

                <li class="w-100 menu-item">
                    <a href="#" class="text-decoration-none">
                        <i class="fa fa-user"></i><span>Admin</span>
                    </a>                
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>