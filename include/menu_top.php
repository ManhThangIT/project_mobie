<div class="wrap_main hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-mega hidden-sm hidden-xs">
				<div class="menu_mega lineheight40">
					<div class="title_menu">
						<span class="title_">Danh mục sản phẩm</span>
						<span class="nav_button"><span class="ion-android-menu"></span></span>
					</div>
					<div class="list_menu_header col-lg-3 col-md-3">
						<ul class="ul_menu">
							

							<?php 
							$query_danh_muc = "select * from danh_muc";
							$result_danh_muc = mysqli_query($connect,$query_danh_muc);
							?>
							<?php while ($row_danh_muc = mysqli_fetch_array($result_danh_muc)) { ?>
								<li class="nav_item lv1">
									<a href="xem_tat_ca_san_pham.php?ma_danh_muc=<?php echo $row_danh_muc['ma_danh_muc'] ?>"><?php echo $row_danh_muc['ten_danh_muc']; ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="bg-header-nav hidden-xs hidden-sm">
				<div class="relative">
					<div class= "row row-noGutter-2">
						<nav class="header-nav">
							<ul class="item_big">
								
								
								
								<li class="nav-item active ">				
									<a class="a-img" href="/"><span>Trang chủ</span></a>
								</li>
								
								
								
								
								<li class="nav-item ">				
									<a class="a-img" href="/gioi-thieu"><span>Giới thiệu</span></a>
								</li>
								
								
								
								

									<!-- <li class="nav-item ">
										<a class="a-img" href="/collections/all"><span>Sản phẩm</span><i class="fa fa-caret-down"></i></a>
										<ul class="item_small">
											
											<li>
												<a href="/pin-cap-bo-sac" title="">Pin, Cáp & Bộ sạc <i class="fa fa-angle-right"></i></a>
												
												<ul>
													
													<li>
														<a href="/pin-sac-du-phong" title="">Pin sạc sự phòng</a>
													</li>
													
													<li>
														<a href="/pin-cap-bo-sac" title="">Dây cáp sạc</a>
													</li>
													
													<li>
														<a href="/pin-cap-bo-sac" title="">Sạc điện thoại</a>
													</li>
													
													<li>
														<a href="/vo-bao-op-lung" title="">Ốp lưng điện thoại</a>
													</li>
													
												</ul>
												
											</li>
											
											<li>
												<a href="/vo-bao-op-lung" title="">Vỏ, bao & Ốp lưng </a>
												
											</li>
											
											<li>
												<a href="/pin-sac-du-phong" title="">Pin sạc dự phòng </a>
												
											</li>
											
											<li>
												<a href="/gia-do-kep" title="">Giá đỡ & Kẹp </a>
												
											</li>
											
											<li>
												<a href="/loa-nghe-nhac" title="">Phụ kiện nghe nhạc </a>
												
											</li>
											
											<li>
												<a href="/gay-chup-hinh" title="">Gậy chụp hình </a>
												
											</li>
											
											<li>
												<a href="/mieng-dan-man-hinh" title="">Miếng dán màn hình </a>
												
											</li>
											
										</ul>
									</li> -->

									
									
									
									
									<li class="nav-item ">				
										<a class="a-img" href="/tin-tuc"><span>Khuyến mãi</span></a>
									</li>
									
									
									
									
									<li class="nav-item ">				
										<a class="a-img" href="./lien_he.php"><span>Liên hệ</span></a>
									</li>
									
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>