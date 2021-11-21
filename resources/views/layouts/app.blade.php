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
        <!-- Left side column. main-sidebar -->
        <x-main-sidebar/>

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

