<?php 
include 'connect_database.php';
$tim_kiem = "";
if(isset($_GET['tim_kiem'])){
	// Gán hàm addslashes để chống sql injection
	$tim_kiem = strip_tags(addslashes($_GET['tim_kiem']));
		if (empty($tim_kiem)) {
           echo "<script> alert('Bạn cần nhập dữ liệu vào ô tìm kiếm !') ;window.location='index.php'; </script>";  
            }else{ 
	?>
	
	<div class="section_sale_shock">
		<div class="container">
			<div class="row row-noGutter-2">
				<div class="content_hihi">
					<div class="heading_sale">
						<span class="icon_title">
							<i class="fa fa-tags" aria-hidden="true"></i>
						</span>
						<h2 class="title-head">
							<a href="san-pham-noi-bat">Sản Phẩm Cần Tìm</a>
						</h2>
					</div>
					<div class="border_wrap">
						<div class="owl_product_comback ">
							<div class="product_comeback_wrap">
								<div class="owl_product_item_content owl-carousel not-dot2 not-nav3 " data-dot="false" data-nav='false' data-lg-items='4' data-md-items='4' data-sm-items='3' data-xs-items="2" data-margin='0'>






									<?php 
									include('./connect_database.php');
									$query_show = "SELECT * from san_pham
									join nha_san_xuat
									on san_pham.ma_nha_san_xuat = nha_san_xuat.ma_nha_san_xuat
									where ten_san_pham  like '%$tim_kiem%'
									limit 7";
									$result_show = mysqli_query($connect,$query_show);
									?>
									<?php

									while($row = mysqli_fetch_array($result_show)){
										?>






										<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
											<div class="owl_item_product product-col">

												<div class="product-box-h">
													<div class="row">
														<div class="col-sm-12 col-md-12 col-lg-12">
															<div class="product-thumbnail">

																<a class="image_link display_flex">
																	<img src="../khachhang/dashboard/san_phamx/<?php echo $row['anh']?>">
																</a>



															
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12">
														<div class="product-info a-left">

															<h3 class="product-name">
																<a class="height_name text2line" href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $row['ma_san_pham']; ?>"> <?php echo $row['ten_san_pham'] ?> 
															</a>
														</h3>

														<div class="product-hides">
															
															<div class="product-hide">



																<div class="price-box clearfix">			
																	<div class="special-price">
																		<span class="price product-price"><?php 
																		$num = $row['gia'];
																		$dinh_dang = number_format($num, 0);
																		echo $dinh_dang." ₫"; ?></span>
																	</div>

																	
																	

																</div>		


															</div>
														</div>
														<div class="product-action clearfix hidden-xs">

															
															<div>


																<a href="them_vao_gio_hang.php?ma_san_pham=<?php echo $row['ma_san_pham'] ?>" class="btn btn-cart btn btn-circle left-to">	
																	Thêm Vào Giỏ
																</a>

																	<!-- <script>
																		$(document).ready(function() {
																			$("#themvaogio").click(function(){
																				alert('Bạn đã thêm vào giỏ.');
																			});
																		});
																	</script> -->


																	
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<?php
								
								}
								mysqli_close($connect);
								?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php } ?>
	
<div class="section_sale_shock">
	<div class="container">
		<div class="row row-noGutter-2">
			<div class="content_hihi">
				<div class="heading_sale">
					<span class="icon_title">
						<i class="fa fa-tags" aria-hidden="true"></i>
					</span>
					<h2 class="title-head">
						<a href="san-pham-noi-bat">Khuyến mãi giá sốc</a>
					</h2>
				</div>
				<div class="border_wrap">
					<div class="owl_product_comback ">
						<div class="product_comeback_wrap">
							<div class="owl_product_item_content owl-carousel not-dot2 not-nav3 " data-dot="false" data-nav='false' data-lg-items='4' data-md-items='4' data-sm-items='3' data-xs-items="2" data-margin='0'>






								<?php 
								include('./connect_database.php');
								$query = "select * from san_pham limit 7 offset 7";
								$result = mysqli_query($connect,$query);
								?>
								<?php
								
								while($row = mysqli_fetch_array($result)){
									?>






									<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
										<div class="owl_item_product product-col">

											<div class="product-box-h">
												<div class="row">
													<div class="col-sm-12 col-md-12 col-lg-12">
														<div class="product-thumbnail">

															<a class="image_link display_flex">
																<img src="../khachhang/dashboard/san_phamx/<?php echo $row['anh']?>">
															</a>



															<div class="sale-flash sale">Giảm giá</div>




															<!-- <a class="xem_nhanh button_wh_40 btn_view right-to quick-view hidden-xs hidden-sm hidden-md">
																Xem nhanh
															</a> -->

														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12">
														<div class="product-info a-left">

															<h3 class="product-name">
																<a class="height_name text2line" href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $row['ma_san_pham']; ?>"> <?php echo $row['ten_san_pham'] ?> 
																</a>
															</h3>

															<div class="product-hides">
																<!-- <div class="bizweb-product-reviews-badge" data-id="9722892"></div> -->
																<div class="product-hide">



																	<div class="price-box clearfix">			
																		<div class="special-price">
																			<span class="price product-price"><?php 
																				$num = $row['gia'];
																				$dinh_dang = number_format($num, 0);
																				echo $dinh_dang." ₫"; ?></span>
																		</div>

																		 <div class="old-price">															 
																			<span class="price product-price-old">
																				380.000₫			
																			</span>
																		</div>
																	

																</div>		


															</div>
														</div>
														<div class="product-action clearfix hidden-xs">

															
																<div>

										
																	<a href="them_vao_gio_hang.php?ma_san_pham=<?php echo $row['ma_san_pham'] ?>" class="btn btn-cart btn btn-circle left-to">	
																			Thêm Vào Giỏ
																	</a>

																	<!-- <script>
																		$(document).ready(function() {
																			$("#themvaogio").click(function(){
																				alert('Bạn đã thêm vào giỏ.');
																			});
																		});
																	</script> -->


																	
																</div>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>









								<?php
							}
							mysqli_close($connect);
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
