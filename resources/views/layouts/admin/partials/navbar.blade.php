<div class="topbar">
    <div class="topbar-left">
        {{-- <a href="{{ route('dashboard') }}" class="logo"> --}}
        <a href="#" class="logo">
            <span>
                <img src="{{ asset('assets/images/slider/slide-1.png') }}" alt="" height="30">
            </span>
            <i>
                <img src="{{ asset('assets/images/slider/slide-2.png') }}" alt="" height="25">
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

            <ul class="nav navbar-nav navbar-right ms-auto">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-decoration-none" data-toggle="dropdown" role="button"
                        style="font-size: 12pt; color: white; margin-top: 10px;">
                        {{-- {{ Auth::user()->name }} --}}
                        John Doe
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            {{-- <form action="{{ route('logout') }}" method="POST"> --}}
                            <form>
                                @csrf
                                <button type="submit">
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
