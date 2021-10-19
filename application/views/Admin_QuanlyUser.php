<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>vendor/Css/admin_QlyUser.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/admin_qlyuser.js"></script>
</head>
<body>

	<?php 
		$uri = $_SERVER['REQUEST_URI'];
		$uri = explode('/',$uri);
		$trangHienTai = end($uri);

		if(!is_numeric($trangHienTai)) {
			$trangHienTai = 1;
		}
	?>
	<!-- phần menu trai -->
	<div class="menutrai" id="sidebar">

		<div class="anhtop">
			<a href=""><img src="<?php echo base_url(); ?>/vendor/image/anhmain/main.jpg" alt=""></a>
		</div>
		
		<div class="sidebar-header">
			<div class="user-pic">
				<img src="<?php echo base_url(); ?>/vendor/image/anhmain/avt.jpg" alt="" class="img-responsive img-rounded" width="50px" height="50px">
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
						<span class="name-menu">Quản lý người dùng</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Quản lý sự kiện</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fas fa-headphones"></i>
						<span class="name-menu">Thống kê</span>
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
				<a href="#" class="admin-avt"><img src="<?php echo base_url(); ?>/vendor/image/anhmain/admin.jpg" alt="" width="40px" height="40px"></a>
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
	
		<!-- phần ảnh nền -->
		<div class="content">
			<div class="tieude text-center">
				<h1>Danh sách người dùng</h1>
			</div>

			<!-- danh sách người dung -->
			<div class="list-user">
				<table class="table">
					<thead class="head">
						<tr>
							<th>Tài khoản</th>
							<th>Tên người dùng</th>
							<th>Email</th>
							<th></th>
						</tr>
					</thead>
					<tbody style="width: 51px;">
						<?php foreach($dulieunguoidung as $key => $value):?>
						<tr>
							<td><?= $value['username']?></td>
							<td><?= $value['fullname']?></td>
							<td><?= $value['sex']?></td>
							<td>
								<div class="nut" style="height: 20px;">
									<a href="<?= base_url();?>Admin_Web/xoaUser/<?=$value['AID']?>" class="btn btn-default delete">Xóa <i class="fas fa-times"></i></a>
								</div>
							</td>
						</tr>
						<?php endforeach?>
					</tbody>
				</table>
			</div>
			<!-- end phần danh sách người dùng -->
			<!-- phần phân trang  -->
			<div class="row text-center page">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="pagination justify-content-center" style="margin: 30px 0">
						<?php for($i = 0; $i < $sotrang; $i++) {?>
							<?php if($i+1 == $trangHienTai) {?>
								<li class="page-item active"><a class="page-link" href="<?= base_url(); ?>Admin_Web/page/<?= $i+1 ?>"><?= $i+1?></a></li>
							<?php } else {?>
								<li class="page-item"><a class="page-link" href="<?= base_url(); ?>Admin_Web/page/<?= $i+1 ?>"><?= $i+1?></a></li>
							<?php } ?>
						<?php } ?>										
					</ul>
				</div>
			</div>
			<!-- end phần phân trang -->
		</div>
		<!-- end phần ảnh nền -->
	</div>
	<!-- end phần nội dung -->
</body>
</html>