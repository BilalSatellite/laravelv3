<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="/">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <x-jet-application-logo style="width: 30px;" />
                        <h3><b>Satellite</b> Mobile</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i class="bi bi-speedometer2" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                <span>{{ __('Dashboard') }}</span>
            </x-jet-nav-link>

            <li>
                <a href="/dashboard">
                    <i class="bi-alarm" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <x-jet-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                <i class="bi bi-person" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                <span>{{ __('Profile') }}</span>
            </x-jet-nav-link>
            <li class="header nav-small-cap">User Interface</li>

            <x-jet-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                <i class="bi bi-people" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
                <span>{{ __('Users') }}</span>
            </x-jet-nav-link>

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
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="Settings" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="bi bi-gear" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
        </a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="Email" data-original-title="Email">
            <i class="bi bi-envelope" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
        </a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="Logout" data-original-title="Logout">
            <i class="bi bi-lock" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i>
        </a>
    </div>
</aside>
