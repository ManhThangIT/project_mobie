<div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            TT
        </a>
        <a href="#" class="simple-text logo-normal">
            SMARTPHONE
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
                    <!-- <div class="photo">
                        <img src="../assets/img/faces/avatar.jpg" />
                    </div> -->
                    <div class="info">
                       <!--  <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Tania Andrew
                                <b class="caret"></b>
                            </span>
                        </a> -->
                        <!-- div class="clearfix"></div> -->
                        <div class="collapse" id="collapseExample">
                           <!--  <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> S </span>
                                        <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="./dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                    
                    <?php include 'ql_san_pham.php'; ?>

                    <?php include 'ql_danh_muc.php'; ?>
                        
                    <?php include 'ql_nha_san_xuat.php';?>

                    <?php include 'ql_tai_khoan.php';?>

                     <?php include 'ql_don_hang.php';?>
                   
                    
                    
                   
                   <!--  <li>
                        <a href="./widgets.html">
                            <i class="material-icons">widgets</i>
                            <p> Widgets </p>
                        </a>
                    </li>
                    <li>
                        <a href="./charts.html">
                            <i class="material-icons">timeline</i>
                            <p> Charts </p>
                        </a>
                    </li>
                    <li>
                        <a href="./calendar.html">
                            <i class="material-icons">date_range</i>
                            <p> Calendar </p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a> -->
                                <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                        <li>
                                            <a href="ca_nhan.php">Hồ Sơ</a>
                                        </li>
                                        <li>
                                            <a href="logout.php">Đăng Xuất</a>
                                        </li>
                                        <!-- <li>
                                            <a href="#">You're now friend with Andrew</a>
                                        </li>
                                        <li>
                                            <a href="#">Another Notification</a>
                                        </li>
                                        <li>
                                            <a href="#">Another One</a>
                                        </li> -->
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder=" Search ">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>