<?php session_start();?>
<?php include 'kt_login.php';?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Xem Hóa Đơn</title>
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
</head>

<body>
    <div class="wrapper">
        <?php include 'menu.php';?>

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
                        <a class="navbar-brand" href="#"> Xem Hóa Đơn </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
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
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title"> XEM HÓA ĐƠN </h4>
                                    <?php
                                    include '../connect_database.php';


                                    $tim_kiem = "";
                                    if(isset($_GET['tim_kiem'])){
                                        $tim_kiem = strip_tags(addslashes($_GET['tim_kiem']));
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
                                    $query = "SELECT * from hoa_don
                                    join khach_hang
                                    on khach_hang.ma_khach_hang = hoa_don.ma_khach_hang
                                    join chitiet_hoadon
                                    on chitiet_hoadon.ma_hoa_don = hoa_don.ma_hoa_don
                                    join san_pham
                                    on chitiet_hoadon.ma_san_pham = san_pham.ma_san_pham
                                    where nguoi_nhan like '%$tim_kiem%'
                                    or ten_san_pham like '%$tim_kiem%'
                                    or dia_chi like '%$tim_kiem%'
                                    or thanh_tien like '%$tim_kiem%'
                                    limit $limit offset $offset";
                                    $result = mysqli_query($connect,$query);



                                    $query_count = "SELECT count(*) from hoa_don
                                    where nguoi_nhan like '%$tim_kiem%'
                                    or dia_chi like '%$tim_kiem%' 
                                    or thanh_tien like '%$tim_kiem%'";
                                    $result_count = mysqli_query($connect,$query_count);
                                    $row_count    = mysqli_fetch_array($result_count);
                                    $count        = $row_count['count(*)'];
                                    mysqli_close($connect);

                                    $total_page = ceil($count/$limit);
                                    ?>


                                    <?php 

                                    include '../connect_database.php';
                                    $query_1 = "SELECT * from hoa_don
                                    join khach_hang
                                    on khach_hang.ma_khach_hang = hoa_don.ma_khach_hang
                                    join chitiet_hoadon
                                    on chitiet_hoadon.ma_hoa_don = hoa_don.ma_hoa_don
                                    join san_pham
                                    on chitiet_hoadon.ma_san_pham = san_pham.ma_san_pham
                                    where tinh_trang = 'Đã Duyệt'
                                    order by thoi_gian_dat_hang";
                                    $result_1 = mysqli_query($connect,$query_1);

                                    $array_hoa_don = array();
                                    while($row_1 = mysqli_fetch_array($result_1)){
                                        $ma_hoa_don = $row_1['ma_hoa_don'];

                                        $array_hoa_don[$ma_hoa_don]['ten_khach_hang']     = $row_1['ten_khach_hang'];
                                        $array_hoa_don[$ma_hoa_don]['thoi_gian_dat_hang'] = $row_1['thoi_gian_dat_hang'];
                                        $array_hoa_don[$ma_hoa_don]['dia_chi']            = $row_1['dia_chi'];
                                        $array_hoa_don[$ma_hoa_don]['sdt']                = $row_1['sdt'];
                                        $array_hoa_don[$ma_hoa_don]['tong_tien']          = $row_1['thanh_tien'];

                                        $ma_san_pham = $row_1['ma_san_pham'];
                                        $array_hoa_don[$ma_hoa_don]['san_pham'][$ma_san_pham]['ten_san_pham'] = $row_1['ten_san_pham'];
                                        $array_hoa_don[$ma_hoa_don]['san_pham'][$ma_san_pham]['gia']          = $row_1['gia'];
                                        $array_hoa_don[$ma_hoa_don]['san_pham'][$ma_san_pham]['so_luong']     = $row_1['so_luong'];
                                    }
                                    ?>
                                    
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <form>
                                                        <td>
                                                            <input type="text" name="tim_kiem" placeholder="Tìm kiếm..." value="<?php echo $tim_kiem; ?>">
                                                        </td>
                                                        <td> <button>Tìm</button> <td>
                                                        </form>

                                                        <th><?php echo "Có $count hóa đơn"?></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-size: 15px;">Thời Gian Đặt Hàng</th>
                                                        <th style="font-size: 15px;">Khách Hàng</th>
                                                        <th style="font-size: 15px;">Sản Phẩm</th>
                                                        <th class="disabled-sorting text-right">Hành Động</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach($array_hoa_don as $ma_hoa_don => $each_hoa_don){ ?>
                                                        <tr>

                                                            <td><?php echo $each_hoa_don['thoi_gian_dat_hang'] ?></td>
                                                            <td>
                                                                <?php echo $each_hoa_don['ten_khach_hang'] ?>
                                                                <br>
                                                                <?php echo $each_hoa_don['sdt'] ?>
                                                                <br>
                                                                <?php echo $each_hoa_don['dia_chi'] ?>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <?php foreach ($each_hoa_don['san_pham'] as $each_san_pham) { ?>
                                                                        <li>
                                                                           <?php echo $each_san_pham['ten_san_pham'] ?>

                                                                           (Giá: <?php echo number_format($each_san_pham['gia'],0)."₫"; ?>)<br>

                                                                           Số Lượng: <?php echo $each_san_pham['so_luong'] ?>
                                                                       </li>
                                                                   <?php } ?>
                                                               </ul>
                                                               <b>Tổng tiền: <?php echo number_format($each_hoa_don['tong_tien'],0)."₫"; ?></b>
                                                            </td>


                                                            <td class="text-right">
                                                                <a href="xem_hoa_don.php" class="btn btn-simple btn-info btn-icon like" style="padding: 0;margin: 5;">
                                                                    <i class="material-icons">undo</i>
                                                                </a>

                                                                
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr><th colspan="11">
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
                                            </th>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>

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
<!--  DANH SÁCH SẢN PHẨM Plugin, full documentation here: https://DANH SÁCH SẢN PHẨM/    -->
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