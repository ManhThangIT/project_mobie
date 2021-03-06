
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Danh Sách Sản Phẩm</title>
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
        <a href="../dashboard.php" class="simple-text logo-mini">
            TT
        </a>
        <a href="../dashboard.php" class="simple-text logo-normal">
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
                <?php include 'menu.php';?>
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
                        <a class="navbar-brand" href="#"> Danh Sách Sản Phẩm </a>
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
                        
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="header text-center">
                        <h3 class="title">Danh Sách Sản Phẩm</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-content">
                                    <td height='100px' width='100px'></td>




                                    <?php
                                    $connect = mysqli_connect('localhost','root','','project_dt');
                                    mysqli_set_charset($connect,'utf8');


                                    $tim_kiem = "";
                                    if(isset($_GET['tim_kiem'])){
                                        $tim_kiem = $_GET['tim_kiem'];
                                    }
                                    $page = 1;
                                    if(isset($_GET['page'])){
                                        $page = $_GET['page'];
                                    }
                                        //giới hạn sản phẩm của 1 trang
                                    $limit = 5;

                                        //bỏ qua bao nhiêu sản phẩm
                                    $offset = ($page-1)*$limit;

                                        //lấy sản phẩm để hiển thị trên 1 trang
                                    $query = "select * from san_pham
                                    join nha_san_xuat
                                    on san_pham.ma_nha_san_xuat = nha_san_xuat.ma_nha_san_xuat
                                    where ten_san_pham like '%$tim_kiem%'
                                    limit $limit offset $offset";
                                    $result = mysqli_query($connect,$query);



                                    $query_count = "select count(*) from san_pham
                                    where ten_san_pham like '%$tim_kiem%'";
                                    $result_count = mysqli_query($connect,$query_count);
                                    $row_count    = mysqli_fetch_array($result_count);
                                    $count        = $row_count['count(*)'];
                                    mysqli_close($connect);

                                    $total_page = ceil($count/$limit);
                                    ?>
                                    <?php echo "<h2 align='center'>Có $count sản phẩm</h2>" ?>
                                    <table border="1" width="100%">
                                        <caption>
                                            <form>
                                                Tìm kiếm: 
                                                <input type="text" name="tim_kiem" value="<?php echo $tim_kiem ?>">
                                                <button>Tìm</button>
                                            </form>
                                        </caption>
                                        <tr>
                                            <td class="tieude">Ảnh</td>
                                            <td class="tieude">Mã SP</td>
                                            <td class="tieude">Tên SP</td>
                                            <td class="tieude">Giá</td>
                                            <td class="tieude">Thông số kỹ thuật</td>
                                            <td class="tieude">Mô tả</td>
                                            <td class="tieude">Thời gian nhập hàng</td>
                                            <td class="tieude">Số lượng đã nhập</td>
                                            <td class="tieude">Tồn kho</td>
                                            <td class="tieude">Nhà sản xuất</td>

                                            <td class="tieude">Hành Động</td>
                                        </tr>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                            $string_thong_so_ki_thuat = $row['thong_so_ki_thuat'];
                                            $array_thong_so_ki_thuat = explode(';',$string_thong_so_ki_thuat);

                                            echo "<tr>";
                                            echo "<td height='143px' width='143px'><img src='".$row['anh']."'></td>";
                                            echo "<td height='50px' width='50px'>".$row['ma_san_pham']."</td>";
                                            echo "<td height='100px' width='100px'>".$row['ten_san_pham']."</td>";
                                            echo "<td height='100px' width='100px'>".$row['gia']."</td>";
                                            echo "<td height='200px' width='300px'>";
                                            foreach ( $array_thong_so_ki_thuat as $each ) {
                                                $array_con = explode("-",$each);
                                                foreach ($array_con as $thong_so_ki_thuat) {
                                                    echo  $thong_so_ki_thuat."<br>";
                                                }
                                            }
                                            echo "</td>";
                                            echo "<td height='200px' width='300px'>".$row['mo_ta']."</td>";  
                                            echo "<td height='50px' width='50px'>".$row['thoi_gian_nhap_hang']."</td>";
                                            echo "<td >".$row['so_luong_da_nhap']."</td>";
                                            echo "<td >".$row['ton_kho']."</td>";
                                            echo "<td>".$row['ten_nha_san_xuat']."</td>";
                                            echo "<td>
                                            <a href ='add_san_pham.php'><button>Thêm</button></a>  
                                            <a href ='sua_san_pham.php?ma_san_pham=".$row['ma_san_pham']."'>
                                            <button>Sửa</button>
                                            </a>  
                                            <a href ='xoa_san_pham.php?ma_san_pham=".$row['ma_san_pham']."'>
                                            <button>Xóa</button>
                                            </a>
                                            
                                            </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>




                                    <div class="container">
                                      <ul class="pagination">
                                        <li class="active">
                                         <?php for($i=1; $i<=$total_page; $i++){ ?>
                                            <a href="?page=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
                                                <?php echo $i ?>
                                            </a>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>

















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
<!-- ___________________PHÂN TRANG_______________ -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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