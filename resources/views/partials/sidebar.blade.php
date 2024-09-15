<head>
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<!-- Main Sidebar Container -->
<body class="hold-transition sidebar-mini layout-fixed">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GatePass</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="color:whitesmoke;">
                @role('admin')
                    I am a Admin!
                @endrole
                @role('user')
                    I am a User
                @endrole
                @role('secretary')
                    I am a Secretary
                @endrole
                @role('guard')
                I am a guard
            @endrole
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open"> --}}
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        @if (auth()->user()->can('apartment') ||  auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <a href="{{ route('aparatment.index') }}" class="nav-link {{request()->is('aparatment')?'active':''}} " >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Apartment</p>
                                </a>

                            </li>
                            {{-- {{auth()->user()}} --}}
                        @endif
                        @if (auth()->user()->can('user') || auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link {{request()->is('user')?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                        @endif
                        @if (auth()->user()->can('roles') ||auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <a href="{{ route('role.index') }}" class="nav-link {{request()->is('role')?'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->can('permission') ||auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <a href="{{ route('permission.index') }}" class="nav-link {{request()->is('permission')?'active':''}}" >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Permissions</p>
                                </a>
                            </li>
                        @endif
                        @if (auth()->user()->can('permission') ||auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{ route('gaurd.index') }}" class="nav-link {{request()->is('gaurd')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gaurd Inf</p>
                            </a>
                        </li>
                    @endif
                    {{-- @if (auth()->user()->can('gaurd') ||auth()->user()->hasRole('secretary'))
                    <li class="nav-item">
                        <a href="{{ route('gaurd.index') }}" class="nav-link {{request()->is('gaurd')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gaurd Inf</p>
                        </a>
                    </li>
                @endif --}}
                    @if (auth()->user()->can('userinformation') ||auth()->user()->hasRole('secretary'))
                    <li class="nav-item">
                        <a href="{{ route('userinformation.index') }}" class="nav-link {{request()->is('userinformation')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>UserInformtion</p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->can('permission') ||auth()->user()->hasRole('admin'))
                <li class="nav-item">
                    <a href="{{ route('visitor.index') }}" class="nav-link {{request()->is('visitor')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Visitors</p>
                    </a>
                </li>
            @endif
            @if (auth()->user()->can('guard') ||auth()->user()->hasRole('guard'))
            <li class="nav-item">
                <a href="{{ route('visitor.index') }}" class="nav-link {{request()->is('visitor')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visitors</p>
                </a>
            </li>
        @endif
            @if (auth()->user()->can('request') ||auth()->user()->hasRole('user'))
            <li class="nav-item">
                <a href="{{ route('visitor.index') }}" class="nav-link {{request()->is('visitor')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request</p>
                </a>
            </li>
        @endif
        
    


                    </ul>
                {{-- </li>
                        @if (auth()->user()->can('apartment') || auth()->user()->hasRole('admin'))
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-chart-pie"></i>
                              <p>
                               Address
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="{{ route('state.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>State</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{ route('district.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>District</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{ route('city.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>City</p>
                                </a>
                              </li>

                            </ul>
                        </li>
                     @endif --}}



            </ul>
        </nav>




        <!-- /.sidebar-menu -->

    <!-- /.sidebar -->
</aside>
<!-- jQuery -->
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


</body>
