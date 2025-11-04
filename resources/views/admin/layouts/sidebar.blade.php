<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <span data-feather="home" class="nav-icon"></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                @role('super-admin')
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="users" class="nav-icon"></span>
                        <span class="menu-text">Users</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin_user.index') }}" class="">admins</a>
                        </li>
                        <li>
                            <a href="{{ route('customers.index') }}" class="">customers</a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index') }}" class="">Roles</a>
                        </li>
                        <li>
                            <a href="{{ route('permissions.index') }}" class="">Permissions</a>
                        </li>

                    </ul>
                </li>
                @endrole

                <form method="POST" action="{{ route('logout') }}" >
                    @csrf
                    <li class="has-child">
                       <a href="{{ route('logout') }}" class="" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                           <span data-feather="power" class="nav-icon"></span>
                           <span class="menu-text">Logout</span>
                       </a>
                    </li>
                </form>

            </ul>
        </div>
    </div>
</aside>
