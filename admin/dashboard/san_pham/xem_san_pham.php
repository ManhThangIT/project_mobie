<?php session_start();?>
<?php include 'kt_login.php';?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Xem Sản Phẩm</title>
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
                        <a class="navbar-brand" href="#"> DANH SÁCH SẢN PHẨM </a>
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
                                    <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
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
                                                    
                                                    <th><?php echo "Có $count sản phẩm"?></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="font-size: 15px;">Mã Sản Phẩm</th>
                                                        <th style="font-size: 15px;">Ảnh</th>
                                                        <th style="font-size: 15px;">Tên Sản Phẩm</th>
                                                        <th style="font-size: 15px;">Thông Số Kỹ Thuật</th>
                                                        <th style="font-size: 15px;">Giá</th>
                                                        <th style="font-size: 15px;">Mô Tả</th>
                                                        <th style="font-size: 15px;">Thời Gian Nhập Hàng</th>
                                                        <th style="font-size: 15px;">Số Lượng Đã Nhập</th>
                                                        <th style="font-size: 15px;">Tồn Kho</th>
                                                        <th style="font-size: 15px;">Nhà Sản Xuất</th>
                                                        <th class="disabled-sorting text-right">Hành Động</th>
                                                    </tr>
                                                    
                                                </thead>
                                            <!-- <tfoot>
                                                <tr>
                                                     <th>Mã Sản Phẩm</th>
                                                    <th>Ảnh</th>
                                                    <th>Tên Sản Phẩm</th>
                                                    <th>Thông Số Kỹ Thuật</th>
                                                    <th>Giá</th>
                                                    <th>Mô Tả</th>
                                                    <th>Thời Gian Nhập Hàng</th>
                                                    <th>Số Lượng Đã Nhập</th>
                                                    <th>Tồn Kho</th>
                                                    <th>Nhà Sản Xuất</th>
                                                    <th class="disabled-sorting text-right">Hành Động</th>
                                                </tr>
                                            </tfoot> -->
                                            <tbody>
                                                <?php 
                                                while($row = mysqli_fetch_array($result)){
                                                    ?>
                                                    <tr>
                                                        <td style="padding: 0px; width: 10px;"><?php echo $row['ma_san_pham'];?></td>
                                                        <td><img style="width: 100px;height: 100px;" src="<?php echo $row['anh']?>"></td>
                                                        <td><?php echo $row['ten_san_pham'];?></td>
                                                        <td><?php echo substr($row['thong_so_ki_thuat'],0,50);?></td>
                                                        <td><?php echo number_format($row['gia'])."₫";?></td>
                                                        <td><?php echo substr($row['mo_ta'],0,50);?></td>
                                                        <td><?php echo $row['thoi_gian_nhap_hang'];?></td>
                                                        <td><?php echo $row['so_luong_da_nhap'];?></td>
                                                        <td><?php echo $row['ton_kho'];?></td>
                                                        <td><?php echo $row['ten_nha_san_xuat'];?></td>
                                                        <td class="text-right">
                                                            <a href="them_san_pham.php" class="btn btn-simple btn-info btn-icon like" style="padding: 0;margin: 5;">
                                                                <i class="material-icons">add_box</i>
                                                            </a>
                                                            <a href="sua_san_pham.php?ma_san_pham=<?php echo $row['ma_san_pham']?>" class="btn btn-simple btn-warning btn-icon edit" style="padding: 0;margin: 5;">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <a href="xoa_san_pham.php?ma_san_pham=<?php echo $row['ma_san_pham']?>" class="btn btn-simple btn-danger btn-icon remove" style="padding: 0;margin: 5;">
                                                                <i class="material-icons">close</i>
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