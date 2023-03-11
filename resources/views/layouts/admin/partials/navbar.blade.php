<div class="topbar">
    <div class="topbar-left">
        {{-- <a href="{{ route('dashboard') }}" class="logo"> --}}
        <a href="#" class="logo">
            <span>
                <img src="{{ asset('assets/images/E-Sawit-Large-White.png') }}" alt="" height="30">
            </span>
            <i>
                <img src="{{ asset('assets/images/E-Sawit-Icon.png') }}" alt="" height="25">
            </i>
        </a>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="d-flex align-items-center w-100 mx-3">
            <ul class="nav navbar-nav navbar-left nav-menu-left">
                <li>
                    <button type="button" class="button-menu-mobile open-left waves-effect">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right ms-auto me-lg-4">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-decoration-none text-white" data-bs-toggle="dropdown"
                        role="button">
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item ps-2">
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm">
                                    <i class="fa fa-sign-out"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
