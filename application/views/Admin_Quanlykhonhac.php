<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý kho nhạc</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
	<script type="text/javascript" src="vendor/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="quanlykhonhac.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- phần menu trai -->
	<div class="menutrai" id="sidebar">

		<div class="anhtop">
			<a href=""><img src="image/main.jpg" alt=""></a>
		</div>
		
		<div class="sidebar-header">
			<div class="user-pic">
				<img src="image/avt.jpg" alt="" class="img-responsive img-rounded" width="50px" height="50px">
			</div>
			<div class="user-info">
				<span class="user-name">Music
					<strong>King</strong>
				</span>
				<span class="user-role">Administrator</span>
				<span class="status">
					<i class="fas fa-circle"></i>
					<span>Online</span>
				</span>
			</div>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li class="header-menu">
		            <span>General</span>
		        </li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
					</a>
				</li>

			</ul>
		</div>
	</div>
	<!-- end phần menu trái -->

	<!-- phần nội dung -->
	<div class="noidungchinh">
		<!-- phần menu trên -->
		<div class="menu-tren">
			<div class="menu-button">
				<a id="menu-toggle" href="#" class="btn btn-default btn-lg toggle"><i class="fa fa-bars"></i></a>
			</div>
			<div class="admin">
				<a href="#" class="admin-avt"><img src="image/admin.jpg" alt="" width="40px" height="40px"></a>
				<div class="admin-info">
					 <ul class="list-group">
					 	<li class="list-group-item"><a href="">
							<span>Thông tin tài khoản</span>
							<i class="fas fa-user-circle"></i>								
						</a></li>
						<li class="list-group-item"><a href="">
							<span>Đăng xuất</span>
							<i class="fas fa-sign-out-alt"></i>								
						</a></li>
					 </ul>
				</div>
			</div>
		</div>
		<!-- end phần menu trên -->
	
		<!-- phần quản lý kho nhạc -->
		<div class="content">
			<p class="tdqlkn">QUẢN LÝ KHO NHẠC</p>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      	<a class="nav-link active qltbh" data-toggle="tab" href="#qltbh">Quản lý theo bài hát</a>
						    </li>
						    <li class="nav-item">
						      	<a class="nav-link" data-toggle="tab" href="#qltcs">Quản lý theo ca sĩ</a>
						    </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- Tab panes -->
					  	<div class="tab-content">
					    	<div id="qltbh" class="container tab-pane active"><br>
								<p class="tdqltbh">DANH SÁCH BÀI HÁT</p>
								<div class="chucnang">
									<div class="container">
										<div class="row">
											<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
												
											</div>
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 them_bai_moi">
												<div class="btn btn-danger">Thêm <i class="fa fa-plus" aria-hidden="true"></i></div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 tim_bai_hat">
												<input type="text" class="form-control" id="usr">
												<button type="button" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
											</div>
											<!-- <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												
											</div> -->
										</div>
									</div>
								</div>
					    	</div>
					    	<div id="qltcs" class="container tab-pane fade"><br>
								<p class="tdqltcs">DANH SÁCH CA SĨ</p>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end quản lý kho nhạc -->
	</div>
	<!-- end phần nội dung -->
</body>
</html>