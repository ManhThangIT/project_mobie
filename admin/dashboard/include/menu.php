
<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo">
        <a href="./dashboard.php" class="simple-text logo-mini">
            TT
        </a>
        <a href="./dashboard.php" class="simple-text logo-normal">
            TRANG CHỦ
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Blue_mars_symbol.svg/1200px-Blue_mars_symbol.svg.png" />

            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        <?php echo $_SESSION['ten_admin'];?>
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="./ca_nhan/xem_thong_tin.php">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Cài Đặt </span>
                            </a>
                        </li>
                    </ul>
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


            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p> QL SẢN PHẨM
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">

                        <li>
                            <a href="./san_pham/xem_san_pham.php">
                                <span class="sidebar-mini"> V </span>
                                <span class="sidebar-normal"> Xem Sản Phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="./san_pham/xem_san_pham.php">
                                <span class="sidebar-mini"> T </span>
                                <span class="sidebar-normal"> Thêm Sản Phẩm </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">list_alt</i>
                    <p> QL DANH MỤC
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./danh_muc/xem_danh_muc.php">
                                <span class="sidebar-mini"> V </span>
                                <span class="sidebar-normal"> Xem Danh Mục </span>
                            </a>
                        </li>
                        <li>
                            <a href="./danh_muc/them_danh_muc.php">
                                <span class="sidebar-mini"> T </span>
                                <span class="sidebar-normal"> Thêm Danh Mục </span>
                            </a>
                        </li>
                        <li>
                            <a href="./danh_muc/xem_danhmuc_sanpham.php">
                                <span class="sidebar-mini"> V </span>
                                <span class="sidebar-normal"> Xem Danh Mục Sản Phẩm</span>
                            </a>
                        </li>
                        <li>
                            <a href="./danh_muc/them_danhmuc_sanpham.php">
                                <span class="sidebar-mini"> T/S </span>
                                <span class="sidebar-normal"> T/S Danh Mục Sản Phẩm</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">list_alt</i>
                    <p> QL NHÀ SẢN XUẤT
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./nha_san_xuat/xem_nha_san_xuat.php">
                                <span class="sidebar-mini"> V </span>
                                <span class="sidebar-normal"> Xem Nhà Sản Xuất </span>
                            </a>
                        </li>
                        <li>
                            <a href="./nha_san_xuat/them_nha_san_xuat.php">
                                <span class="sidebar-mini"> T </span>
                                <span class="sidebar-normal"> Thêm Nhà Sản Xuất </span>
                            </a>
                        </li> 
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">list_alt</i>
                    <p> QL HÓA ĐƠN
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./don_hang/xem_hoa_don.php">
                                <span class="sidebar-mini"> V </span>
                                <span class="sidebar-normal"> Xem Hóa Đơn </span>
                            </a>
                        </li>
                        <li>
                            <a href="./don_hang/hoa_don_duyet.php">
                                <span class="sidebar-mini"> VD </span>
                                <span class="sidebar-normal"> Hóa Đơn Duyệt </span>
                            </a>
                        </li>
                        <li>
                            <a href="./don_hang/hoa_don_huy.php">
                                <span class="sidebar-mini"> VH </span>
                                <span class="sidebar-normal"> Hóa Đơn Hủy </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">list_alt</i>
                    <p> QL TÀI KHOẢN
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="./tai_khoan/xem_admin.php">
                                <span class="sidebar-mini"> AD </span>
                                <span class="sidebar-normal"> Admin </span>
                            </a>
                        </li>
                        <li>
                            <a href="./tai_khoan/xem_khach_hang.php">
                                <span class="sidebar-mini"> KH </span>
                                <span class="sidebar-normal"> Khách Hàng </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>