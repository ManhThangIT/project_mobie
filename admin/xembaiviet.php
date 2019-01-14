<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8 />
	<title>giao dien admin</title>
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
			      <a class="navbar-brand" href="#" style="color: #ff9708;">AnimeDC.net</a>
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
				          <a data-toggle="collapse" href="#danhmuc"> <i class="fa fa-table" aria-hidden="true"></i>Quản lý danh mục</a>
				        </h4>
				      </div>
				      <div id="danhmuc" class="panel-collapse collapse">
				        <ul id="home" class="danhmuc">
							<li><a href="themdanhmuc.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm danh mục</a></li>
							<li><a href="xemdanhmuc.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem danh mục</a></li>
						</ul>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#baiviet"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>   Quản lý bài viết</a>
				        </h4>
				      </div>
				      <div id="baiviet" class="panel-collapse collapse">
				        <ul id="home" class="baiviet">
							<li><a href="thembaiviet.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm bài viêt</a></li>
							<li><a href="xembaiviet.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem bài viết</a></li>
						</ul>
				      </div>
				    </div>
					<div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#thanhvien"><i class="fa fa-user" aria-hidden="true"></i>   Quản lý Thành viên</a>
				        </h4>
				      </div>
				      <div id="thanhvien" class="panel-collapse collapse">
				        <ul id="home" class="baiviet">
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>  Thêm Thành viên</a></li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>  Xem thành viên</a></li>
						</ul>
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
						<div class="col-md-4 add-dm">
							<h4 class="text-center">Bài Viết</h4>
						</div>
						<div class="clearfix"></div>
								<table class="table table-bordered" style="margin-top:20px;">
									<tr class="bg-info">
										<td>id</td>
										<td>title</td>
										<td>cat</td>
										<td>edit</td>
										<td>delete</td>
									</tr>
									<tr>
										<td>1</td>
										<td>tieu de</td>
										<td>danh muc</td>
										<td><a href="">edit</a></td>
										<td><a href="">delete</a></td>
									</tr>
								</table>

					</div><!--end .content-->
				</div>
		</div>
	</div>
	</body>
<html>