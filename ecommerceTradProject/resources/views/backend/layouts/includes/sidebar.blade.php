<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Musa-Tradia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>

                {{-- Banner --}}
                <li class="nav-item">
                    <a href="{{ route('banners.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-flag"></i>
                        Banner
                    </a>
                </li>
                {{-- Business Information  --}}

                <li class="nav-item">
                    <a href="{{ route('business.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-business-time"></i>
                        Business Plan
                    </a>
                </li>

                {{-- Service  --}}
                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-business-time"></i>
                        Services
                    </a>
                </li>

                {{-- Website Setting --}}
                <li class="nav-item">
                    <a href="{{ route('siteSettings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        Website Setting
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
