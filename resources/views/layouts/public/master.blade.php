<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="shortcut icon" href="{{ asset('assets/images/E-Sawit-Icon.png') }}"/>
        <title>E-Sawit</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="{{ asset('favicon.ico')}}" rel="icon">
        <link href="{{ asset('assets/green/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/green/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/green/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/green/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/green/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/green/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/green/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{asset('assets/green/css/style.css')}}" rel="stylesheet">
        <style>
            #preloader {
                position: fixed;
                margin: auto;
                background: #fff;
                height: 100%;
                width: 100%;
                z-index: 1000;
                overflow: hidden;
            }

            body {
                overflow: hidden;
            }
        </style>
        @yield('css')
    </head>
    <body>
        @include('components.preloader')
        <div id="wrapper">
            @include('layouts.public.partials.navbar')
            <div style="min-height:73vh;" class="content-page">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            @include('layouts.public.partials.footer')
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Vendor JS Files -->
        <script src="{{asset('assets/green/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/green/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/green/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/green/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/green/vendor/php-email-form/validate.js')}}"></script>
        <!-- Template Main JS File -->
        <script src="{{ asset('assets/libs/jquery-3.6.3/jquery-3.6.3.min.js') }}"></script>
        <script src="{{asset('assets/green/js/main.js')}}"></script>
        <script>
            $(document).ready(function() {
                function disablePreloader() {
                    $('#preloader').fadeOut(1000, function() {
                        $('body').css('overflow', 'auto');
                        $('#preloader').remove();
                    });
                }
                disablePreloader();
            });
        </script>
        @yield('js')
    </body>
</html>