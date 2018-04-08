<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{ url( 'home' ) }}">
                        <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">3</span> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="dripicons-store"></i><span> Organizations </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url( 'organizations/create' ) }}">Create</a></li>
                        <li><a href="{{ url( 'organizations' ) }}">Search</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="dripicons-flag"></i><span> Leagues </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url( 'leagues/create' ) }}">Create</a></li>
                        <li><a href="{{ url( 'leagues' ) }}">Search</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="dripicons-user-group"></i><span> Teams </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url( 'teams/create' ) }}">Create</a></li>
                        <li><a href="{{ url( 'teams' ) }}">Search</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url( 'rosters' ) }}">
                        <i class="dripicons-user-id"></i><span> Roster </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url( 'games' ) }}">
                        <i class="fi-watch"></i><span> Upcoming Games </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="dripicons-location"></i><span> Fields </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url( 'fields/create' ) }}">Create</a></li>
                        <li><a href="{{ url( 'fields' ) }}">Search</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url( 'payments' ) }}">
                        <i class="fa fa-money"></i><span> Payments </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
