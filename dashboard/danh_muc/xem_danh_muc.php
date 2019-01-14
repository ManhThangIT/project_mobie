
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Danh Sách Danh Mục</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
       
        td{
            text-align: center;
        }
        .tieude{
            font-size: 18px;
            font-weight: bold;
            color: #FF0000;
        }
        td a button{
            height:30px;
            width:80px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="" class="simple-text logo-mini">
                    TT
                </a>
                <a href="" class="simple-text logo-normal">
                   SMARTPHONE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <!-- <div class="photo">
                        <img src="../../assets/img/faces/avatar.jpg" />
                    </div> -->
                    <div class="info">
                        <!-- <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Tania Andrew
                                <b class="caret"></b>
                            </span>
                        </a> -->
                       <!--  <div class="clearfix"></div> -->
                        <div class="collapse" id="collapseExample">
                            <!-- <ul class="nav">
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
                    <li>
                        <a href="../dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                    <li class="active">
                        <a data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
                            <!-- <i class="material-icons">image</i> -->
                            <p> QUẢN LÝ SẢN PHẨM
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="http://localhost:8090/khachhang/dashboard/san_phamx/xem_san_pham.php">
                                        <span class="sidebar-mini"> DS </span>
                                        <span class="sidebar-normal"> Danh Sách Sản Phẩm </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8090/khachhang/dashboard/san_phamx/add_san_pham.php">
                                        <span class="sidebar-mini"> T </span>
                                        <span class="sidebar-normal"> Thêm Sản Phẩm </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="sidebar-mini"> CT </span>
                                        <span class="sidebar-normal"> Chi Tiết Sản Phẩm </span>
                                    </a>
                                </li>
                                <!-- <li class="active">
                                    <a href="../pages/timeline.html">
                                        <span class="sidebar-mini"> T </span>
                                        <span class="sidebar-normal"> Timeline </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../pages/login.html">
                                        <span class="sidebar-mini"> LP </span>
                                        <span class="sidebar-normal"> Login Page </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../pages/register.html">
                                        <span class="sidebar-mini"> RP </span>
                                        <span class="sidebar-normal"> Register Page </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../pages/lock.html">
                                        <span class="sidebar-mini"> LSP </span>
                                        <span class="sidebar-normal"> Lock Screen Page </span>
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="../pages/user.html">
                                        <span class="sidebar-mini"> UP </span>
                                        <span class="sidebar-normal"> User Profile </span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                           <!--  <i class="material-icons">apps</i> -->
                           <p> QUẢN LÝ DANH MỤC
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li>
                                <a href="./xem_danh_muc.php">
                                    <span class="sidebar-mini"> DS </span>
                                    <span class="sidebar-normal"> Danh sách danh mục </span>
                                </a>
                            </li>
                            <li>
                                <a href="./add_danh_muc.php">
                                    <span class="sidebar-mini"> T </span>
                                    <span class="sidebar-normal"> Thêm danh mục </span>
                                </a>
                            </li>
                            <li>
                                <a href="./components/panels.html">
                                    <span class="sidebar-mini"> CT </span>
                                    <span class="sidebar-normal"> Chi tiết danh mục </span>
                                </a>
                            </li>
                                <!-- <li>
                                    <a href="./components/sweet-alert.html">
                                        <span class="sidebar-mini"> SA </span>
                                        <span class="sidebar-normal"> Sweet Alert </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/notifications.html">
                                        <span class="sidebar-mini"> N </span>
                                        <span class="sidebar-normal"> Notifications </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/icons.html">
                                        <span class="sidebar-mini"> I </span>
                                        <span class="sidebar-normal"> Icons </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/typography.html">
                                        <span class="sidebar-mini"> T </span>
                                        <span class="sidebar-normal"> Typography </span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <!-- <i class="material-icons">content_paste</i> -->
                            <p> QUẢN LÝ NHÀ SẢN XUẤT
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="http://localhost:8090/khachhang/dashboard/nha_san_xuat/xem_nha_san_xuat.php">
                                        <span class="sidebar-mini"> DS </span>
                                        <span class="sidebar-normal"> Danh sách nhà sản xuất </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8090/khachhang/dashboard/nha_san_xuat/add_nha_san_xuat.php">
                                        <span class="sidebar-mini"> T </span>
                                        <span class="sidebar-normal"> Thêm nhà sản xuất </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./forms/validation.html">
                                        <span class="sidebar-mini"> CT </span>
                                        <span class="sidebar-normal"> Chi tiết nhà sản xuất</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="./forms/wizard.html">
                                        <span class="sidebar-mini"> W </span>
                                        <span class="sidebar-normal"> Wizard </span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                   <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <!-- <i class="material-icons">grid_on</i> -->
                            <p> QUẢN LÝ TÀI KHOẢN
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./tables/regular.html">
                                        <span class="sidebar-mini"> CN </span>
                                        <span class="sidebar-normal"> Cá nhân </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./tables/extended.html">
                                        <span class="sidebar-mini"> KH </span>
                                        <span class="sidebar-normal"> Khách hàng </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./tables/datatables.net.html">
                                        <span class="sidebar-mini"> AD </span>
                                        <span class="sidebar-normal"> Admin </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                           <!--  <i class="material-icons">place</i> -->
                            <p> QUẢN LÝ ĐƠN HÀNG
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./maps/google.html">
                                        <span class="sidebar-mini"> DS </span>
                                        <span class="sidebar-normal"> Danh sách đơn hàng </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./maps/fullscreen.html">
                                        <span class="sidebar-mini"> TT </span>
                                        <span class="sidebar-normal"> Tình trạng đơn hàng </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./maps/vector.html">
                                        <span class="sidebar-mini"> CT </span>
                                        <span class="sidebar-normal"> Chi tiết đơn hàng </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                   <!--  <li>
                        <a href="../widgets.html">
                            <i class="material-icons">widgets</i>
                            <p> Widgets </p>
                        </a>
                    </li>
                    <li>
                        <a href="../charts.html">
                            <i class="material-icons">timeline</i>
                            <p> Charts </p>
                        </a>
                    </li>
                    <li>
                        <a href="../calendar.html">
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
                        <a class="navbar-brand" href="#"> Danh Sách Danh Mục </a>
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
                                </a>
                                <ul class="dropdown-menu">
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
                                </ul>
                            </li> -->
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="header text-center">
                        <h3 class="title">Danh Sách Danh Mục</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-content">
                                    <td height='100px' width='100px'></td>




                                    <?php
                                    $connect = mysqli_connect('localhost','root','','project_dt');
                                    mysqli_set_charset($connect,'utf8');
                                    $query = 'select * from danh_muc';
                                    $result = mysqli_query($connect,$query);

                                    ?>
                                    <table border="1" width="100%">
                                        <tr>
                                            <td class="tieude">Mã danh mục</td>
                                            <td class="tieude">Tên danh mục</td>
                                            <td class="tieude">Action</td>
                                            
                                        </tr>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                          
                                            echo "<td height='50px' width='50px'>".$row['ma_danh_muc']."</td>";
                                            echo "<td height='100px' width='100px'>".$row['ten_danh_muc']."</td>";
                                           
                                            echo "<td>
                                                <a href ='./add_danh_muc.php'><button>Thêm</button></a>  
                                                <a href ='sua_danh_muc.php?ma_danh_muc=".$row['ma_danh_muc']."'>
                                                    <button>Sửa</button>
                                                </a>  
                                                <a href =''>
                                                    <button>Chi tiết</button>
                                                </a>
                                                </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>





















                                    <!-- <ul class="timeline">
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                                <i class="material-icons">card_travel</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-danger">Some Title</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                                                </div>
                                                <h6>
                                                    <i class="ti-time"></i> 11 hours ago via Twitter
                                                </h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                                <i class="material-icons">extension</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-success">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge info">
                                                <i class="material-icons">fingerprint</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-info">Another Title</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                                                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                                                    <hr>
                                                    <div class="dropdown pull-left">
                                                        <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <i class="material-icons">build</i>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li>
                                                                <a href="#action">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#action">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#here">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#link">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                                <i class="material-icons">flight_land</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-warning">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <!-- <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portofolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul> -->
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                      <!--   <a href="http://www.creative-tim.com"> Creative Tim </a>, made with love for a better web -->
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/js/material.min.js" type="text/javascript"></script>
<script src="../../assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../../assets/js/arrive.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../../assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../assets/js/moment.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../../assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../../assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../../assets/js/bootstrap-notify.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../../assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../../assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="../../assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../../assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../../assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="../../assets/js/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../../assets/js/fullcalendar.min.js"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../../assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/material-dashboard.js?v=1.2.1"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

</html>