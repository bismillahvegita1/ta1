<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('img/jasamarga.png') }}" alt=" Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Repository SK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.home') }}" class="nav-link">
                        <p>
                            <i class="fas fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                </li>
                @can('karyawan_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.karyawan.index') }}"
                            class="nav-link {{ request()->is('admin/karyawan') || request()->is('admin/karyawan/*') ? 'active' : '' }}">
                            <i class="fas fa-users">

                            </i>
                            <p>
                                <span>Data Karyawan</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('karyawan_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.karyawan.index') }}"
                            class="nav-link {{ request()->is('admin/karyawan') || request()->is('admin/karyawan/*') ? 'active' : '' }}">
                            <i class="fas fa-file">

                            </i>
                            <p>
                                <span>Data Surat Keputusan</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('karyawan_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.karyawan.index') }}"
                            class="nav-link {{ request()->is('admin/karyawan') || request()->is('admin/karyawan/*') ? 'active' : '' }}">
                            <i class="fas fa-folder">

                            </i>
                            <p>
                                <span>Berkas Surat Keputusan</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('karyawan_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.karyawan.index') }}"
                            class="nav-link {{ request()->is('admin/karyawan') || request()->is('admin/karyawan/*') ? 'active' : '' }}">
                            <i class="fas fa-user">

                            </i>
                            <p>
                                <span>Data Users</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('user_management_access')
                    <li
                        class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fas fa-users">

                            </i>
                            <p>
                                <span>{{ trans('global.userManagement.title') }}</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.permissions.index') }}"
                                        class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.roles.index') }}"
                                        class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}"
                                        class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fas fa-user">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                {{-- @can('product_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.products.index') }}"
                            class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs">

                            </i>
                            <p>
                                <span>{{ trans('global.product.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan --}}
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
