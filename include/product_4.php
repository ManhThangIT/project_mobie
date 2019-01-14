<!-- Subiz --> <script> 
(function(s, u, b, i, z){ u[i]=u[i]||function(){ u[i].t=+new Date(); (u[i].q=u[i].q||[]).push(arguments); }; z=s.createElement('script'); var zz=s.getElementsByTagName('script')[0]; z.async=1; z.src=b; z.id='subiz-script'; zz.parentNode.insertBefore(z,zz); })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz'); subiz('setAccount', 'acqefbsgxffajenyvnfl'); </script> <!-- End Subiz -->

<div class="section_like_product">
	<div class="container">
		<div class="row row-noGutter-2">
			<div class="heading">
				<h2 class="title-head">
					<a href="">SẢN PHẨM</a>
				</h2>
			</div>
			<div class="border_wrap products-view-grid-bb">
				<div class="owl_product_comback">
					<div class="product_comeback_wrap item_hai">
						<div class="owl-carousel owl_product_item_content" data-margin="0" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-nav="true">
							
							<?php 
							include('./connect_database.php');
							$query = "select * from san_pham";
							$result = mysqli_query($connect,$query);
							?>
							<?php

							while($row = mysqli_fetch_array($result)){
								?>						





								<div class="item saler_item">
									<div class="owl_item_product product-col">

										<div class="product-box-h product-box-1">
											<div class="row">
												<div class="col-sm-5 col-xs-5 col-xs-left-f">
													<div class="product-thumbnail">
														<a class="image_link display_flex">
															<img src="../khachhang/dashboard/san_phamx/<?php echo $row['anh']?>">
														</a>


													</div>
												</div>
												<div class="col-sm-7 col-xs-7 col-xs-right-f pad-col-15">
													<div class="product-info a-left">

														<h3 class="product-name"><a class="height_name text2line" href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $row['ma_san_pham']; ?>"> <?php echo $row['ten_san_pham'] ?> 
													</a></h3>

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

																	<div class="old-price">								<!-- 							 
																		<span class="price product-price-old">
																			380.000₫			
																		</span> -->
																	</div>

																</div>		


															</div>
														</div>
														<div class="product-action clearfix hidden-xs">
															<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9722892" enctype="multipart/form-data">
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


										<div class="product-box-h product-box-1">
											<div class="row">
												<div class="col-sm-5 col-xs-5 col-xs-left-f">
													<div class="product-thumbnail">
														<a class="image_link display_flex">
															<img src="https://bizweb.dktcdn.net/100/289/371/themes/634361/assets/product-1.png?1524126221691"  data-lazyload="https://bizweb.dktcdn.net/thumb/compact/100/289/371/products/08-dbdfc9aa-fe11-45bc-ace0-c2c8cb80b32f.jpg?v=1516612166043" alt="Ốp lưng iPhone 6/6S Memo Totem">
														</a>



													</div>
												</div>
												<div class="col-sm-7 col-xs-7 col-xs-right-f pad-col-15">
													<div class="product-info a-left">

														<h3 class="product-name"><a href="/op-lung-iphone-6-6s-memo-totem" title="Ốp lưng iPhone 6/6S Memo Totem">Ốp lưng iPhone 6/6S Memo Totem</a></h3>

														<div class="product-hides">
															<div class="bizweb-product-reviews-badge" data-id="9721688"></div>
															<div class="product-hide">


																<div class="price-box clearfix">
																	<div class="special-price">
																		<span class="price product-price">250.000₫</span>
																	</div>											
																</div>


															</div>
														</div>
														<div class="product-action clearfix hidden-xs">
															<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9721688" enctype="multipart/form-data">
																<div>

																	<input type="hidden" name="variantId" value="15526574" />
																	<button class="btn-buy btn-cart btn btn-circle left-to add_to_cart " title="Thêm vào giỏ hàng">
																		Thêm Vào Giỏ
																	</button>



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













