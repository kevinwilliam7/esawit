<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <div id="sidebar-menu">
            <ul class="metisMenu nav" id="side-menu">
                <li class="menu-title">MENU NAVIGASI</li>
                <li class="w-100 {{ str_contains(Route::currentRouteName(), 'admin.home') ? 'active' : '' }}">
                    <a href="{{ route('admin.home.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.home') ? 'active' : '' }}">
                        <i
                            class="fa fa-home {{ str_contains(Route::currentRouteName(), 'admin.home') ? 'active' : '' }}"></i><span>Halaman
                            Utama</span>
                    </a>
                </li>

                <li class="w-100 {{ str_contains(Route::currentRouteName(), 'admin.perkebunan') ? 'active' : '' }}">
                    <a href="{{ route('admin.perkebunan.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.perkebunan') ? 'active' : '' }}">
                        <i class="fa fa-tree"></i><span>Perusahaan Perkebunan</span>
                    </a>
                </li>

                <li
                    class="w-100 menu-item {{ str_contains(Route::currentRouteName(), 'admin.pabrik') ? 'active' : '' }}">
                    <a href="{{ route('admin.pabrik.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.pabrik') ? 'active' : '' }}">
                        <i class="fa fa-industry"></i><span>Pabrik</span>
                    </a>
                </li>

                <li
                    class="w-100 menu-item {{ str_contains(Route::currentRouteName(), 'admin.kontribusi') ? 'active' : '' }}">
                    <a href="{{ route('admin.kontribusi.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.kontribusi') ? 'active' : '' }}">
                        <i class="fa fa-envira"></i><span>CSR</span>
                    </a>
                </li>

                <li class="w-100 menu-item {{ str_contains(Route::currentRouteName(), 'admin.sop') ? 'active' : '' }}">
                    <a href="{{ route('admin.sop.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.sop') ? 'active' : '' }}">
                        <i class="fa fa-book"></i><span>SOP Perizinan</span>
                    </a>
                </li>

                <li
                    class="w-100 menu-item {{ str_contains(Route::currentRouteName(), 'admin.perundangan') ? 'active' : '' }}">
                    <a href="{{ route('admin.perundangan.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.perundangan') ? 'active' : '' }}">
                        <i class="fa fa-download"></i><span>Peraturan Perundangan</span>
                    </a>
                </li>

                <li class="w-100 menu-item {{ str_contains(Route::currentRouteName(), 'admin.tbs') ? 'active' : '' }}">
                    <a href="#"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.tbs') ? 'active' : '' }}">
                        <i class="fa fa-line-chart"></i><span>Harga TBS</span>
                    </a>
                </li>

                <li class="w-100 menu-item">
                    <a href="{{ route('admin.admin.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.admin') ? 'active' : '' }}">
                        <i class="fa fa-user"></i><span>Admin</span>
                    </a>
                </li>

                <li class="menu-title">UMUM</li>
                <li class="w-100 menu-item">
                    <a href="{{ route('admin.pengaturan.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.pengaturan') ? 'active' : '' }}">
                        <i class="fa fa-wrench"></i><span>Pengaturan</span>
                    </a>
                </li>
                <li class="w-100 menu-item">
                    <a href="{{ route('admin.partner.index') }}"
                        class="text-decoration-none {{ str_contains(Route::currentRouteName(), 'admin.partner') ? 'active' : '' }}">
                        <i class="fa fa-users"></i><span>Partner</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
