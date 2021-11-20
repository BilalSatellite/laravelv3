<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{--
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/color_theme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    @livewireStyles


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <header class="main-header">
            @livewire('navigation-menu')
            <!-- Header Navbar -->

            <!-- Page Heading -->
            {{-- {{ $header }} --}}
            <x-jet-banner />
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">

                <div class="user-profile">
                    <div class="ulogo">
                        <a href="index.html">
                            <!-- logo for regular state and mobile devices -->
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="../images/logo-dark.png" alt="">
                                <h3><b>Sat</b>ellite</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">

                    <li>
                        <a href="index.html">
                            <i data-feather="pie-chart"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="header nav-small-cap">User Interface</li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="message-circle"></i>
                            <span>Application</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>
                            <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>
                        </ul>
                    </li>



                </ul>
            </section>


            <div class="sidebar-footer">
                <!-- item-->
                <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
                    aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                        class="ti-email"></i>Email</a>
                <!-- item-->
                <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                        class="ti-lock"></i></a>
            </div>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                {{ $header }}
                {{ $slot }}
            </div>
        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Now</a>
                    </li>
                </ul>
            </div>
            &copy; 2020 <a href="#">Psd to Html Expert</a>. All Rights Reserved.
        </footer>
    </div><!-- ./wrapper -->
    @stack('modals')
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" ></script>
    <!-- panel Admin App -->
    <script src="{{ asset('panel/js/vendors.min.js') }}" ></script>
    <script src="{{ asset('panel/js/template.js') }}" ></script>


    @livewireScripts

    @stack('scripts')
</body>

</html>

