<?php session_start();?>
<?php include 'kt.php'?>
<html class="anyflexbox boxshadow display-table"><head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digiworld - Thanh toán đơn hàng">

    <title>Thanh toán đơn hàng</title>

    
    <link rel="shortcut icon" href="//bizweb.dktcdn.net/assets/favicon.ico" type="image/x-icon">
    
    <script src="//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?4" type="text/javascript"></script>
    <link href="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20171025" rel="stylesheet" type="text/css">
    <link href="//bizweb.dktcdn.net/assets/themes_support/nprogress.css?20171025" rel="stylesheet" type="text/css">
    <link href="//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?20171025" rel="stylesheet" type="text/css">
    <link href="//bizweb.dktcdn.net/assets/themes_support/checkout.css?20181105" rel="stylesheet" type="text/css">

    <link href="//bizweb.dktcdn.net/100/289/371/checkout_stylesheet/634361/checkout.css?1524126221691" rel="stylesheet" type="text/css">


    
    
    


    <style>#moca-modal{opacity:1 !important;overflow: visible !important}</style></head>

    <body class="body--custom-background-color " style="">
        <!-- Subiz --> <script> 
(function(s, u, b, i, z){ u[i]=u[i]||function(){ u[i].t=+new Date(); (u[i].q=u[i].q||[]).push(arguments); }; z=s.createElement('script'); var zz=s.getElementsByTagName('script')[0]; z.async=1; z.src=b; z.id='subiz-script'; zz.parentNode.insertBefore(z,zz); })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz'); subiz('setAccount', 'acqefbsgxffajenyvnfl'); </script> <!-- End Subiz -->
        <div class="banner" data-header="">
            <div class="wrap">
                <div class="shop logo logo--left ">









                    
                    <h1 class="shop__name">
                        <a href="/">
                            Digiworld
                        </a>
                    </h1>
                    
                </div>
            </div>
        </div>

        
        
        
        
        <?php 
        // require_once('kiem_tra_khach_hang.php');
        if(!empty($_SESSION['gio_hang'])){
            $email = $_SESSION['customer']['email'];
            include 'connect_database.php';
            $query  = "select * from khach_hang where email='$email'";
            $result = mysqli_query($connect,$query);
            $row = mysqli_fetch_array($result);
            $_SESSION['ma_khach_hang']=$row['ma_khach_hang'];

            ?>
            
            
            
            
            
            <div class="wrap" context="checkout" define="{checkout: new Bizweb.StoreCheckout(this,{ token: &quot;74a4472609004a0c8526b1e1bb1512d4&quot;, email: &quot;&quot;, totalOrderItemPrice: 250000.0000, shippingFee: 0, freeShipping: false, requiresShipping: true, existCode: false, code: &quot;&quot;, discount: 0, settingLanguage: &quot;vi&quot;, moneyFormat: &quot;{{amount_no_decimals_with_comma_separator}}₫&quot;, discountLabel: &quot;Miễn phí&quot;, districtPolicy: &quot;optional&quot;, district: &quot;&quot;, province:&quot;&quot;, otherAddress: false, shippingId: 0, shippingMethods: [], customerAddressId: 0, reductionCode: &quot;&quot; })}">
                <div class="sidebar ">
                    <div class="sidebar_header">
                        <h2>
                            <label class="control-label">Đơn hàng</label>
                            <label class="control-label"></label>
                        </h2>
                        <hr class="full_width">
                    </div>
                    <div class="sidebar__content">
                        <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                         
                            <div class="summary-body summary-section summary-product">
                                <div class="summary-product-list">

                                   <?php 
                                   $tong = 0;
                                   foreach ($_SESSION['gio_hang'] as $ma_san_pham => $tung_san_pham) { 
                                    
                                    ?>

                                    <table class="product-table">
                                        <tbody>
                                            
                                            <tr class="product product-has-image clearfix">
                                                <td>
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper">
                                                            
                                                            <img src="../khachhang/dashboard/san_phamx/<?php echo $tung_san_pham['anh']?>" class="product-thumbnail__image">
                                                            
                                                        </div>
                                                        <span class="product-thumbnail__quantity" aria-hidden="true">
                                                            <?php echo $tung_san_pham['so_luong'];?>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="product-info">
                                                    <span class="product-info-name">
                                                        
                                                        <?php echo $tung_san_pham['ten_san_pham'];?>
                                                    </span>
                                                    <?php 
                                                    $tien_tung_san_pham = $tung_san_pham['gia']*$tung_san_pham['so_luong'];
                                                    ?>
                                                    
                                                </td>
                                                <td class="product-price text-right">
                                                 <?php echo $tien_tung_san_pham."₫" ?>
                                             </td>
                                         </tr>
                                         
                                     </tbody>
                                 </table>

                                 <?php 
                                 $tong += $tung_san_pham['gia']*$tung_san_pham['so_luong'];
                             } 
                             ?>

                             
                         </div>
                     </div>
                     <hr class="m0">
                 </div>
                 <div class="order-summary order-summary--discount">
                  
                    <hr class="m0">
                </div>
                <div class="order-summary order-summary--total-lines">
                    <div class="summary-section border-top-none--mobile">
                        <div class="total-line total-line-subtotal clearfix">
                                <!-- <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span bind="money(totalOrderItemPrice - discount,'{{amount_no_decimals_with_comma_separator}}₫')" class="total-line-subprice pull-right">250.000₫</span> -->
                            </div>
                            <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                                <!-- <span class="total-line-name pull-left">
                                    Phí vận chuyển
                                </span> -->
                                
                            </div>

                            
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span bind="money(totalOrderItemPrice + (isNaN(shippingFee) ? 0 : shippingFee) - discount,'{{amount_no_decimals_with_comma_separator}}₫')" class="total-line-price pull-right"><?php echo $tong."₫"; ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="xem_gio_hang.php">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Quay về giỏ hàng</span>
                            </a>
                            
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group has-error">
                    <div class="help-block ">
                        <ul class="list-unstyled">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="main" role="main">
            <div class="main_header">
                <div class="shop logo logo--left ">







                    
                    <h1 class="shop__name">
                        <a href="index.php">
                            Digiworld
                        </a>
                    </h1>
                    
                </div>
            </div>
            <div class="main_content">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="section" define="{billing_address: {}}">
                            <div class="section__header">
                                <div class="layout-flex layout-flex--wrap">
                                    <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                        <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thông tin mua hàng</label>
                                    </h2>
                                    
                                                <!-- <a class="layout-flex__item section__title--link" href="/account/login?returnUrl=/checkout">
                                                    <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                                                    Đăng nhập 
                                                </a> -->
                                                
                                            </div>
                                        </div>
                                        <div class="section__content">


                                            <!-- ____________XỬ LÝ ĐẶT Hàng__________ -->
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
                                            
                                            <div class="billing">
                                             
                                                <div>
                                                    <!-- _______________FORM XUWR LY THONG TIN KHACH HANG___________ -->
                                                    <form action="xl_dat_hang.php" method="get">
                                                        <div class="form-group">
                                                            <div class="field__input-wrapper">
                                                                
                                                                <input name="nguoi_nhan" type="text" class="field__input form-control" value="<?php echo $_SESSION['ten_khach_hang'];?>">
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="field__input-wrapper">
                                                              
                                                                <input name="sdt_nguoi_nhan" type="tel" class="field__input form-control" value="<?php echo $_SESSION['sdt'];?>">
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <div class="field__input-wrapper">
                                                                
                                                                <input name="dia_chi" class="field__input form-control" value="<?php echo $_SESSION['dia_chi'];?>">
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>

                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-checkout" name="dat_hang" value="1">ĐẶT HÀNG</button>
                                                            
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </form>

                                                    <div bind-show="!otherAddress" class="form-group">
                                                        
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    
                                    
                                </div>


                                <div class="col-md-6 col-lg-6">
                                 
                                    <div class="section payment-methods p0--desktop" bind-class="{'p0--desktop': shippingMethods.length == 0}">
                                        <div class="section__header">
                                            <h2 class="section__title">
                                                <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                                <label class="control-label">Thanh toán</label>
                                            </h2>
                                        </div>
                                        <div class="section__content">
                                            <div class="content-box">
                                                
                                                <div class="content-box__row">
                                                    <div class="radio-wrapper">
                                                        <div class="radio__input">
                                                            <input class="input-radio" type="radio" value="295831" name="PaymentMethodId" id="payment_method_295831" data-check-id="4" bind="payment_method_id" checked="">
                                                        </div>
                                                        <label class="radio__label" for="payment_method_295831">
                                                            <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
                                                            <span class="radio__label__accessory">
                                                                <ul>
                                                                    <li class="payment-icon-v2 payment-icon--4">
                                                                     
                                                                        <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>
                                                                        
                                                                    </li>
                                                                </ul>
                                                            </span>
                                                        </label> 
                                                    </div> <!-- /radio-wrapper--> 
                                                </div>
                                                
                                                
                                                




                                                <div class="modal fade moca-modal" id="moca-modal" tabindex="-1" role="dialog" style="opacity: 1; overflow: visible;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div>
                                                                <iframe style="border: 0px; width: 100%; height: 100%;" src=""></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        
                        <div class="main_footer footer unprint">
                            
                            
                            
                            <div class="mt10"></div>
                        </div>



                    </div>
                </div>



                <script src="//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?20171025" type="text/javascript"></script>
                <script src="//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?20171025" type="text/javascript"></script>
                <script src="//bizweb.dktcdn.net/assets/themes_support/twine.min.js?20171025" type="text/javascript"></script>
                <script src="//bizweb.dktcdn.net/assets/themes_support/validator.min.js?20171025" type="text/javascript"></script>
                <script src="//bizweb.dktcdn.net/assets/themes_support/nprogress.js?20171025" type="text/javascript"></script>
                <script src="//bizweb.dktcdn.net/assets/themes_support/money-helper.js?20171025" type="text/javascript"></script>

                <script src="//bizweb.dktcdn.net/assets/scripts/ua-parser.pack.js?20180611" type="text/javascript"></script>
                <script src="//bizweb.dktcdn.net/assets/themes_support/checkout.js?20180821" type="text/javascript"></script>



                

            </body></html>