<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('contents/admin/') }}/assets/img/ndub.png">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('contents/admin/') }}/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Tempusdominus Bootstrap 4 -->
    <link href="{{ asset('contents/admin/') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('contents/admin/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('contents/admin/') }}/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('contents/admin/') }}/dist/css/adminlte.min.css" rel="stylesheet">
    <!-- overlayScrollbars -->

    <link href="{{ asset('contents/admin/') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
        rel="stylesheet">

    <!-- Daterange picker -->
    <link href="{{ asset('contents/admin/') }}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- summernote -->
    <link href="{{ asset('contents/admin/') }}/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">

    <link href="{{ asset('contents/admin/assets') }}/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('contents/admin/assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('contents/admin/assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('contents/admin/assets') }}/css/jquery.dataTables.min.css" rel="stylesheet">


    <script src="{{ asset('contents/admin/assets') }}/js/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('contents/admin/assets') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('contents/admin/assets') }}/js/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        referrerpolicy="no-referrer" rel="stylesheet" />

    <style>
        /* Bootstrap 4 text input with search icon */

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            </ul>

        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <x-main-sidebar></x-main-sidebar>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">


                <div class="container-fluid">

                    @yield('dashboard_content')

                </div><!-- /.container-fluid -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">NDUB Convocation</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 1.0.0 -->
    </div>
  </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('contents/admin/') }}/plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->

    <script src="{{ asset('contents/admin/') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('contents/admin/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('contents/admin/') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('contents/admin/') }}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('contents/admin/') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('contents/admin/') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('contents/admin/') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('contents/admin/') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('contents/admin/') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('contents/admin/') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('contents/admin/') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('contents/admin/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('contents/admin/') }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('contents/admin/') }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('contents/admin/') }}/dist/js/pages/dashboard.js"></script>

    <!-- all js link -->

    <script src="{{ asset('contents/admin/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('contents/admin/assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contents/admin/assets') }}/js/all.min.js"></script>
    <script src="{{ asset('contents/admin/assets') }}/js/custom.js"></script>

</body>

</html>
