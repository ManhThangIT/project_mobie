<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8 />
	<title>ADMIN</title>
		<link rel=stylesheet href="css/bootstrap.min.css" />
		<script src="js/jquery-2.2.2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
	<div id="warper">
		<div id="top">
			<nav class="navbar navbar-default site-top">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#" style="color: #ff9708;">SMARTPHONE</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><p class="text-center" style="padding-top: 15px;">Xin chào <span style="color: red">Admin</span></p></li>
			        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<!--end #top-->
		<div class="col-md-2 left">
			<div class="left-menu">
				<div class="panel-group">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
				        </h4>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#danhmuc"> <i class="fa fa-table" aria-hidden="true"></i>Quản lý sản phẩm</a>
				        </h4>
				      </div>
				      <div id="danhmuc" class="panel-collapse collapse">
				        <ul id="home" class="danhmuc">
							<li><a href="themdanhmuc.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm sản phẩm</a></li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem sản phẩm</a></li>
						</ul>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				         <!--  <a data-toggle="collapse" href="#baiviet"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>   Quản lý bài viết</a> -->
				        </h4>
				      </div>
				      <div id="baiviet" class="panel-collapse collapse">
				        <!-- <ul id="home" class="baiviet">
							<li><a href="thembaiviet.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm bài viêt</a></li>
							<li><a href="xembaiviet.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem bài viết</a></li>
						</ul> -->
				      </div>
				    </div>
					<div class="panel panel-default">
				      <div class="panel-heading">
				        <!-- <h4 class="panel-title">
				          <a data-toggle="collapse" href="#thanhvien"><i class="fa fa-user" aria-hidden="true"></i>   Quản lý Thành viên</a>
				        </h4> -->
				      </div>
				      <div id="thanhvien" class="panel-collapse collapse">
				        <!-- <ul id="home" class="baiviet">
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm Thành viên</a></li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem thành viên</a></li>
						</ul> -->
				      </div>
				    </div>
				</div>
			</div>
			<!--end .left-menu-->
			<div class="clearfix"></div>
		</div>
		<div class="right">
			<div class="col-md-10">
				<div class="content">
					<div class="col-md-4 thongbao codm">
						<h4 class="text-right" style="color: #fff">Tổng số danh mục</h4>
						<h4 class="text-right" style="color: #fff">3</h4>
						<p class="text-left">
							<i class="fa fa-table fa-4x" style="color: #fbdb94" aria-hidden="true"></i>
						</p>
					</div>
					<div class="col-md-4 thongbao cobv">
						<h4 class="text-right" style="color: #fff">Tổng số bài viết</h4>
						<h4 class="text-right" style="color: #fff">12</h4>
						<p class="text-left">
							<i class="fa fa-newspaper-o fa-4x" style="color: #b1ca89" aria-hidden="true"></i>
						</p>
					</div>
					<div class="col-md-4 thongbao cotv">
						<h4 class="text-right" style="color: #fff">Tổng số thành viên</h4>
						<h4 class="text-right" style="color: #fff">1</h4>
						<p class="text-left">
							<i class="fa fa-user fa-4x" style="color: #aedce9" aria-hidden="true"></i>
						</p>
					</div>
				</div><!--end .content-->
			</div>
		</div>
	</div>
	</body>
<html>