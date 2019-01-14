<div class="container">
	<div class="row row-noGutter-2">
		<div class="content_hihi" style="margin-left:-1px">
			<div class="heading">
				<h2 class="title-head">
					<a href="san-pham-noi-bat">NOKIA</a>
				</h2>
			</div>

			<div class="border_wrap">
				<div class="owl_product_comback ">
					<div class="product_comeback_wrap">
						<div class="owl_product_item_content owl-carousel not-dot2 not-nav3 " data-dot="false" data-nav='false' data-lg-items='5' data-md-items='4' data-sm-items='3' data-xs-items="2" data-margin='0'>


							<?php 
							include('./connect_database.php');
							$query = "select * from danhmuc_sanpham
							join san_pham
							on san_pham.ma_san_pham = danhmuc_sanpham.ma_san_pham
							where ma_danh_muc = '4'";
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



														<!-- <div class="sale-flash sale">Giảm giá</div> -->






													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="product-info a-left">

														<h3 class="product-name">
															<a class="height_name text2line" href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $row['ma_san_pham']; ?>"> <?php echo $row['ten_san_pham'] ?> 
														</a>

													</h3>
													<div class="product-hides">
														<div class="bizweb-product-reviews-badge" data-id="9722892"></div>
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
														<form action="" method="post" class="variants form-nut-grid" data-id="product-actions-9722892" enctype="multipart/form-data">
															<div>

																<a href="them_vao_gio_hang.php?ma_san_pham=<?php echo $row['ma_san_pham'] ?>" class="btn btn-cart btn btn-circle left-to">	
																	Thêm Vào Giỏ
																</a>





							</div>
						</form>
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