<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Usaha Perkebunan Kelapa Sawit Kabupaten Sanggau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="E-Sawit Sanggau" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link href="{{ asset('assets/libs/bootstrap-5.2.3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body>
    @include('components.preloader')
    <!-- Begin page -->
    <div id="wrapper">
        @include('layouts.admin.partials.navbar')
        @include('layouts.admin.partials.sidebar')
        <div class="content-page">
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('layouts.admin.partials.footer')
    </div>
    <!-- END wrapper -->

    <script src="{{ asset('assets/libs/jquery-3.6.3/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-5.2.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/libs/modernizr/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metisMenu/metisMenu.min.js') }}"></script>
    
    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2-11.7.2/js/sweetalert2.all.min.js') }}"></script>
    @include('components.alert')
    @yield('js')
</body>

</html>