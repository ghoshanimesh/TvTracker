<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo-mini.png" alt="logo"/><span> Vuesto</span></a>
        <a class="navbar-brand brand-logo-mini pb-3" href="index.php"><img src="assets/images/logo-mini.png" alt="logo"/></a>
    </div>
    <div class="navbar-light navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle " id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="fa fa-bell mr-4"></i>
                    <span class="count text-center">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success"><i class="fa fa-calendar"></i></div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">New Show today</h6>
                            <p class="text-gray ellipsis mb-0">Just a reminder that you have an upcoming favorite today</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info"><i class="mdi mdi-link-variant"></i></div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Season Finale!</h6>
                            <p class="text-gray ellipsis mb-0">Last One To Go!</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
            </li>
            <li class="nav-item dropdown" style="border-right: none;">
                <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/faces/face11.jpg" alt="image">
                    <span class="d-none d-lg-inline font">User Name</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out mr-2 text-info"></i>Signout</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center nav-link m-0 pr-0" data-toggle="dropdown" id="offcanvas" aria-expanded="false"><span class="mdi mdi-menu mdi-2x"></span></button>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="offcanvas">
                    <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out mr-2 text-info"></i>Dashboard</a>
                    <a class="dropdown-item" href="login.php"><i class="fa fa-compass mr-2 text-info"></i>Discover</a>
                    <a class="dropdown-item" href="login.php"><i class="fa fa-tasks mr-2 text-info"></i>Timeline</a>
                    <a class="dropdown-item" href="login.php"><i class="fa fa-cog mr-2 text-info"></i>Account</a>
                </div>                
            </li>
        </ul>      
    </div>
</nav>