<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <span class="menu-sub-title">( 2 new updates )</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa fa-crosshairs menu-icon"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Form Elements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="chartjs.php">
                <i class="fa fa-line-chart menu-icon"></i>
                <span class="menu-title">Chart</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fa fa-table menu-icon"></i>
                <span class="menu-title">Table</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-lock menu-icon"></i>
                <span class="menu-title">Sample Pages</span>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="blank-page.php"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="register.php"> Register </a></li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="sidebar-progress">
        <p>Total Sales</p>
        <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p>50 Items sold</p>
    </div>
    <div class="sidebar-progress">
        <p>Customer Target</p>
        <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p>200 Items sold</p>
    </div>
</nav>