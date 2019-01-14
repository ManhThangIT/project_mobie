<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-2">
				<ul class="list-inline topbar_left hidden-sm hidden-xs">
					
					
					<li>
						Hotline: <a class="hai01" href="tel:0981744199">0981.744.199</a>	
						
					</li>
					
				</ul>       
			</div>

			<div class="col-md-6 col-sm-6 d-list col-xs-10 a-right topbar_right">
				<div class="list-inline a-center f-right">
					<ul>
						
						<li class="hidden-md hidden-lg"><a href="" title="Đăng ký">Đăng ký</a></li>
						<li class="hidden-md hidden-lg"><a href=""  title="Đăng nhập">Đăng nhập</a></li>
						<!-- Đây là cú pháp phtml -->
						<?php if (isset($_SESSION['ten_khach_hang'])) :?>


							<li class="hidden-xs hidden-sm">
								<a href="xem_thong_tin.php" class="account_a register_btn">
									<?php 
										echo "Xin Chào: ".$_SESSION['ten_khach_hang'];
									?>
								</a>
							</li>
							<li class="hidden-xs hidden-sm">
								<a href="./logout.php" class="account_a login_btn" title="Đăng xuất">Đăng xuất</a>
							</li>

							
							
						<?php else: ?>
							<li class="hidden-xs hidden-sm">
								<a href="#" data-toggle="modal" data-target="#login_register" class="account_a register_btn" title="Đăng ký">Đăng ký</a>
							</li>
							<li class="hidden-xs hidden-sm">
								<a href="#" data-toggle="modal" data-target="#login_register" class="account_a login_btn" title="Đăng nhập">Đăng nhập</a>
							</li>	
						<?php endif ?>	







						
							
						
						<!-- <li class="hidden-sm hidden-xs">
							
							<a href="/lien-he" title="Hệ thống cửa hàng" class="account_a">
								Hệ thống cửa hàng
							</a>
							
						</li> -->
						<!-- <li class="hidden-sm hidden-xs">
							
							<a href="/san-pham-noi-bat" title="Khuyến mãi hot" class="account_a">
								Tin khuyến mãi
							</a>
							
						</li>	 -->
					</ul>
				</div>


			</div>
		</div>
	</div>
</div>