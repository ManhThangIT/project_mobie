<?php session_start();?>
<?php include 'kt.php'?>
<?php if(isset($_SESSION['gio_hang'])){?>
<html class=""><head><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><style type="text/css">.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}
</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans"><style type="text/css">.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}
</style><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shop name - Thanh toán đơn hàng">

<title>Cảm ơn</title>


<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">


<link href="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20171025" rel="stylesheet" type="text/css">
<link href="//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?20171025" rel="stylesheet" type="text/css">
<link href="//bizweb.dktcdn.net/assets/themes_support/thankyou.css?20181105" rel="stylesheet" type="text/css">


<link href="//bizweb.dktcdn.net/100/289/371/checkout_stylesheet/634361/checkout.css?1524126221691" rel="stylesheet" type="text/css">



<script type="text/javascript" async="" src="//productreviews.bizwebapps.vn/assets/js/productreviews.min.js?store=template-digiworld.bizwebvietnam.net"></script>


</head>

<body class="body--custom-background-color " style="">
<!-- Subiz --> <script> 
(function(s, u, b, i, z){ u[i]=u[i]||function(){ u[i].t=+new Date(); (u[i].q=u[i].q||[]).push(arguments); }; z=s.createElement('script'); var zz=s.getElementsByTagName('script')[0]; z.async=1; z.src=b; z.id='subiz-script'; zz.parentNode.insertBefore(z,zz); })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz'); subiz('setAccount', 'acqefbsgxffajenyvnfl'); </script> <!-- End Subiz -->
    <div context="checkout" define="{checkout: new Bizweb.StoreCheckout(this,{})}" class="container">
        <div class="header">
            <div class="wrap">
                <div class="shop logo logo--left ">

                    <h1 class="shop__name">
                        <a href="index.php">
                            Digiworld
                        </a>
                    </h1>

                </div>
            </div>
        </div>



        <?php 
        $email = $_SESSION['customer']['email'];
        
        if (empty($_SESSION['customer']['email'])) {
            header('location: form_dangnhap.php');
        }
        if(!empty($_SESSION['gio_hang'])){
            $email = $_SESSION['customer']['email'];
            include 'connect_database.php';
            $query  = "select * from khach_hang where email='$email'";
            $result = mysqli_query($connect,$query);
            $row = mysqli_fetch_array($result);
            $_SESSION['ma_khach_hang']=$row['ma_khach_hang'];
            $_SESSION['ten_khach_hang']=$row['ten_khach_hang'];

            ?>



            <div class="main">
                <div class="wrap clearfix">
                    <div class="row thankyou-infos">
                        <div class="col-md-7 thankyou-message">
                            <div class="thankyou-message-icon unprint">
                                <div class="icon icon--order-success svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                        <g fill="none" stroke="#8EC343" stroke-width="2">
                                            <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                            <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="thankyou-message-text">
                                <h3>Cảm ơn bạn đã đặt hàng</h3>
                                <p>

                                    Một email xác nhận đã được gửi tới <?php echo  $_SESSION['customer']['email'];?>. Xin vui lòng kiểm tra email của bạn

                                </p>
                                <div style="font-style: italic;">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 order-info" define="{order_expand: false}">
                            <div class="order-summary order-summary--custom-background-color ">
                                <div class="order-summary-header summary-header--thin summary-header--border">
                                    <h2>
                                        <label class="control-label">Đơn hàng</label>
                                        
                                        <label class="control-label unprint">của bạn</label>
                                    </h2>

                                </div>
                                <div class="order-items mobile--is-collapsed" bind-class="{'mobile--is-collapsed': !order_expand}">
                                    <div class="summary-body summary-section summary-product">
                                        <div class="summary-product-list">
                                            <ul class="product-list">
                                                <?php 
                                                $tong = 0;
                                                foreach ($_SESSION['gio_hang'] as $ma_san_pham => $tung_san_pham) { 

                                                    ?>
                                                    <li class="product product-has-image clearfix">
                                                        <div class="product-thumbnail pull-left">
                                                            <div class="product-thumbnail__wrapper">

                                                                <img src="../khachhang/dashboard/san_phamx/<?php echo $tung_san_pham['anh']?>" class="product-thumbnail__image">

                                                            </div>
                                                            <span class="product-thumbnail__quantity unprint" aria-hidden="true"> <?php echo $tung_san_pham['so_luong'];?></span>
                                                        </div>
                                                        <div class="product-info pull-left">
                                                            <span class="product-info-name">
                                                                <strong><?php echo $tung_san_pham['ten_san_pham'];?></strong>
                                                                <label class="print"></label>
                                                            </span>


                                                        </div>
                                                        <?php 
                                                        $tien_tung_san_pham = $tung_san_pham['gia']*$tung_san_pham['so_luong'];
                                                        ?>
                                                        <strong class="product-price pull-right">
                                                         <?php echo number_format($tien_tung_san_pham,0)."₫" ?>
                                                     </strong>
                                                 </li>
                                                 <?php 
                                                 $tong += $tung_san_pham['gia']*$tung_san_pham['so_luong'];
                                             } 
                                             ?>


                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <div class="summary-section  border-top-none--mobile ">



                                <div class="total-line total-line-shipping clearfix">
                                    <span class="total-line-name pull-left">
                                        Phí vận chuyển
                                    </span>
                                    <span class="pull-right">

                                        40.000₫
                                        
                                    </span>
                                </div>
                                
                                
                            </div>
                            <div class="summary-section">
                                <div class="total-line total-line-total clearfix">
                                    <span class="total-line-name total-line-name--bold pull-left">
                                        Tổng cộng
                                    </span>
                                    <span class="total-line-price pull-right">
                                        <?php echo number_format($tong,0)."₫"; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-7 col-sm-12 customer-info">

                    <div define="{viewmaps: new Bizweb.ViewMaps('21.0438292','105.81025019999993','AIzaSyAjQYbV19v7UMDVk0cDZ54yKh3OP1hQhbk;AIzaSyCLd-YkfOzBXlNGfS_FNLnpolyME1tRAJI;AIzaSyDdvilzaJlb50t2IRC3PrfSb1lNzf6n3pQ')}">

                    </div>

                    <div class="shipping-info">
                        <div class="row">

                            <?php
                            $email = $_SESSION['customer']['email'];
                            if (empty($_SESSION['customer']['email'])) {
                                header('location: form_dangnhap.php');
                            }
                            include 'connect_database.php';
                            $query  = "select * from khach_hang where email='$email'";
                            $result = mysqli_query($connect,$query);
                            $row = mysqli_fetch_array($result);
                            $_SESSION['ma_khach_hang']=$row['ma_khach_hang'];
                            $_SESSION['ten_khach_hang']=$row['ten_khach_hang'];
                            $_SESSION['sdt']=$row['sdt'];
                            $_SESSION['dia_chi']=$row['dia_chi'];
                            ?>

                            <div class="col-md-6 col-sm-6">
                                <div class="order-summary order-summary--white no-border no-padding-top">
                                    <div class="order-summary-header">
                                        <h2>
                                            <label class="control-label">Thông tin nhận hàng</label>
                                        </h2>
                                    </div>
                                    <div class="summary-section no-border no-padding-top">
                                        <p class="address-name">
                                         Họ và Tên: <?php echo $_SESSION['ten_khach_hang'];?>
                                     </p>
                                     <p class="address-address">
                                        Địa chỉ: <?php echo $_SESSION['dia_chi'];?>
                                    </p>





                                    <p class="address-phone">
                                        Số điện thoại: <?php echo $_SESSION['sdt'];?>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div class="order-summary order-summary--white no-border">
                                <div class="order-summary-header">
                                    <h2>
                                        <label class="control-label">Thông tin thanh toán</label>
                                    </h2>
                                </div>
                                <div class="summary-section no-border no-padding-top">
                                    <p class="address-name">
                                        Họ và Tên: <?php echo $_SESSION['ten_khach_hang'];?>
                                    </p>
                                    <p class="address-address">
                                        Địa chỉ: <?php echo $_SESSION['dia_chi'];?>
                                    </p>





                                    <p class="address-phone">
                                        Số điện thoại: <?php echo $_SESSION['sdt'];?>
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <?php unset($_SESSION['gio_hang']); ?> 
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="order-summary order-summary--white no-border">
                                <div class="order-summary-header">
                                    <h2>
                                        <label class="control-label">Hình thức thanh toán</label>
                                    </h2>
                                </div>
                                <div class="summary-section no-border no-padding-top">
                                    <span>Thanh toán khi giao hàng (COD)</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="order-summary order-summary--white no-border">
                                <div class="order-summary-header">
                                    <h2>
                                        <label class="control-label">Hình thức vận chuyển</label>
                                    </h2>
                                </div>
                                <div class="summary-section no-border no-padding-top">


                                    <span>Giao hàng tận nơi - 40.000₫</span>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="order-success unprint">
                    <a href="index.php" class="btn btn-primary">
                        Tiếp tục mua hàng
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="main_footer footer unprint">



        <div class="mt10"></div>
    </div>



</div>
</div>

<style>
#map {
    width: 100%;
    height: 245px;
}

.hidden-map{
    display:none;
}
</style>

<script src="//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?20171025" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?20171025" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/twine.min.js?20171025" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/assets/themes_support/checkout.js?20180327" type="text/javascript"></script>
<!--<script src="https://bizweb.dktcdn.net/100/000/001/themes/544642/assets/checkout.js?15168730444422222" type='text/javascript'></script>-->
<script src="//bizweb.dktcdn.net/assets/themes_support/thankyou.js?20171025" type="text/javascript"></script>





</body></html>
 <?php } else {echo "<script> alert('Bạn không có sản phẩm nào trong giỏ hàng !');window.location='xem_gio_hang.php'; </script>";}?>