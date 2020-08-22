<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ route('users.index') }}" class="b-brand">
                <div class="b-bg">
                    <i class="feather"></i>
                </div>
                <span class="b-title">AMS</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>User Management</label>
                </li>
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Users</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('users.index') }}" class="">View Users</a></li>
                        <li class=""><a href="{{ route('users.create') }}" class="">Add User</a></li>
                    </ul>
                </li>
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Roles</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('roles.index') }}" class="">View Roles</a></li>
                        <li class=""><a href="{{ route('roles.create') }}" class="">Add Role</a></li>
                    </ul>
                </li>
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Permissions</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('permissions.index') }}" class="">View Permissions</a></li>
                        <li class=""><a href="{{ route('permissions.create') }}" class="">Add Permission</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Attendance Management</label>
                </li>
<li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Reports</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="studentreport" class="">Single Student Report</a></li>
                        <li class=""><a href="systemreport" class="">System Report</a></li>
                    </ul>
                </li>
                 <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="manageleaves" class="nav-link "><span class="pcoded-micon"><i class="feather icon-index"></i></span><span class="pcoded-mtext">Leaves</span></a>
                </li>
                 <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="manageattendance" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Attendance</span></a>
                </li>
                    
            </ul>
        </div>
    </div>
</nav>
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
        <a href="index.html" class="b-brand">
            <div class="b-bg">
                <i class="feather icon-trending-up"></i>
            </div>
            <span class="b-title">AMS</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        
            <li class="nav-item">
                <div class="main-search">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="javascript:" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                            <i class="feather icon-search input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head" >
                            <!-- <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"> -->
                            <span>{{ Auth::user()->name }}</span>
                            <a class="dud-logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                
                                <i class="feather icon-log-out"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                       
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->