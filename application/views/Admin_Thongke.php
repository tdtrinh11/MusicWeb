<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?php echo base_url();?>vendor/Js/jquery-3.3.1.min.js"></script>
	<!-- <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
	<script type="text/javascript" src="vendor/js/bootstrap.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/Bootstrap/css/bootstrap.min.css">
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 -->
	 <script type="text/javascript" src="<?php echo base_url();?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/vendor/Css/Admin_Thongke.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
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
			<a href=""><img src="<?php echo base_url(); ?>/vendor/image/main.jpg" alt=""></a>
		</div>
		
		<div class="sidebar-header">
			<div class="user-pic">
				<img src="<?php echo base_url(); ?>/vendor/image/avt.jpg" alt="" class="img-responsive img-rounded" width="50px" height="50px">
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
				<a href="#" class="admin-avt"><img src="<?php echo base_url(); ?>/vendor/image/admin.jpg" alt="" width="40px" height="40px"></a>
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
				<h1>Thống kê</h1>
			</div>

			<!-- phần tab-list -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
						    <li class="nav-item">
						       <a class="nav-link active" data-toggle="tab" href="#home">Theo lượt nghe</a>
						    </li>
						    <li class="nav-item">
						       <a class="nav-link" data-toggle="tab" href="#menu1">Theo lượt tải</a>
						    </li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end phần tab-list -->
	
			<!-- phần tab-content -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- Tab panes -->
						  <div class="tab-content clearfix">
						    <div id="home" class="container tab-pane active"><br>
						     	<div class="row">
						     		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						     			<h2>Danh sách bài hát</h2>
						     		</div>
						     		<div class="timkiem float-right">
										<input class="form-control" id="search-key" type="text" placeholder="Nhập tên bài hát" aria-label="Search" name="key">
										<button class="btn btn-info" type="submit" id="search">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
						     		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhsachbh">
						     			<table class="table">
						     				<thead>
						     					<tr>
						     						<th>STT</th>
						     						<th>Tên bài hát</th>
													<th>Tên ca sĩ</th>
													<th>Thể loại</th>
													<th>Hình ảnh</th>
													<th>Audio</th>
													<th>Lượt nghe</th>
						     					</tr>
						     				</thead>
						     				<tbody>
						     					<?php foreach($listen as $key => $value ): ?>
						     					
						     						<tr>
							     						<td><?=($trangHienTai-1)*5 + 1 + $key?></td>
							     						<td><?= $value['song_name']?></td>
							     						<td><?= $value['singer']?></td>
							     						<td><?= $value['type']?></td>
							     						<td class="hinhanh"><img src="<?= $value['URL_IMG']?>" width="30px" height="30px" alt=""></td>
							     						<td><?= $value['URL']?></td>
							     						<td><?= $value['hear_number']?></td>
							     					</tr>
						     					
						     					<?php endforeach ?>
						     					<?php unset($key); ?>
												<?php unset($value); ?>
						     				</tbody>
						     			</table>
						     		</div>
						     		<!-- phần phân trang  -->
									<?php if($sotrang > 1) { ?>
										<div class="text-center page mx-auto">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<ul class="pagination justify-content-center" style="margin: 30px 0">
													<?php for($i = 0; $i < $sotrang; $i++) {?>
														<?php if($i+1 == $trangHienTai) {?>
															<li class="page-item active page-listen"><a class="page-link" ><?= $i+1?></a></li>
														<?php } else {?>
															<li class="page-item page-listen"><a class="page-link"><?= $i+1?></a></li>
														<?php } ?>
													<?php } ?>										
												</ul>
											</div>
										</div>
									<?php } ?>
									<!-- end phần phân trang -->
						     	</div> 
						    </div>
						    <div id="menu1" class="container tab-pane fade"><br>
						      <div class="row">
						      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						      		<h2>Danh sách bài hát</h2>
						      	</div>
						      	<div class="timkiem float-right">
									<input class="form-control" id="search-key" type="text" placeholder="Nhập tên bài hát" aria-label="Search" name="key">
									<button class="btn btn-info" type="submit" id="search">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</div>
						      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 danhsachbh">
						      		<table class="table">
						      			<thead>
					     					<tr>
					     						<th>STT</th>
					     						<th>Tên bài hát</th>
												<th>Tên ca sĩ</th>
												<th>Thể loại</th>
												<th>Hình ảnh</th>
												<th>Audio</th>
												<th>Lượt tải</th>
					     					</tr>
					     				</thead>
					     				<tbody>
					     					<?php foreach($download as $key => $value): ?>
					     					
					     						<tr>
						     						<td><?= $key + 1 + ($trangHienTai-1)*5?></td>
						     						<td><?= $value['song_name']?></td>
						     						<td><?= $value['singer']?></td>
						     						<td><?= $value['type']?></td>
						     						<td class="hinhanh"><img src="<?= $value['URL_IMG']?>" width="30px" height="30px" alt=""></td>
						     						<td><?= $value['URL']?></td>
						     						<td><?= $value['download_number']?></td>
						     					</tr>

					     					<?php endforeach ?>
					     				</tbody>
						      		</table>
						      	</div>
						      	<!-- phần phân trang  -->
								<?php if($sotrang > 1) { ?>
									<div class="text-center page mx-auto">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<ul class="pagination justify-content-center" style="margin: 30px 0">
												<?php for($i = 0; $i < $sotrang; $i++) {?>
													<?php if($i+1 == $trangHienTai) {?>
														<li class="page-item active page-download"><a class="page-link "><?= $i+1?></a></li>
													<?php } else {?>
														<li class="page-item page-download"><a class="page-link "><?= $i+1?></a></li>
													<?php } ?>
												<?php } ?>										
											</ul>
										</div>
									</div>
								<?php } ?>
								<!-- end phần phân trang -->
						      </div>
						    </div>
						  </div>	
					</div>
				</div>
			</div>
			<!-- end phần tab-content -->
		</div>
		<!-- end phần ảnh nền -->
	</div>
	<!-- end phần nội dung -->
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/Js/Admin_Thongke.js"></script>
</body>
</html>