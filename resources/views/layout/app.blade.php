<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.14.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 06:44:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')
    <!-- <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title> -->

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}">
    @include('layout.style')
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @include('layout.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <!-- Navbar -->
        @include('layout.header')


        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content">
            <div class="pb-5">
                @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('layout.footer')
            <!-- / Footer -->

        </div>
        <!-- Content wrapper -->
    </main>
    <!-- / Layout page -->

    <!-- Overlay -->
    @include('layout.script')
</body>

</html>