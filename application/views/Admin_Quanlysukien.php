<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/Js_Ng/angular-material.min.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/FontAwesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Css/admin_quanlysukien.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/admin_quanlysukien.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
	
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-animate.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-messages.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-material.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/admin_quanlysukien_ng.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js" charset="utf-8"></script>
	
	
	
	<!-- font-family: 'Nunito', sans-serif; -->
</head>
<body ng-app="myApp">
	
	<!-- phần menu trai -->
	<div class="menutrai" id="sidebar">

		<div class="anhtop">
			<a href=""><img src="<?= base_url(); ?>vendor/Image/main.jpg" alt=""></a>
		</div>
		
		<div class="sidebar-header">
			<div class="user-pic">
				<img src="<?= base_url(); ?>vendor/Image/avt.jpg" alt="" class="img-responsive img-rounded" width="50px" height="50px">
			</div>
			<div class="user-info">
				<span class="user-name">Music
					<strong>King</strong>
				</span>
				<span class="user-role">Administrator</span>
				<span class="status">
					<i class="fa fa-circle"></i>
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
						<i class="fa fa-user"></i>
						<span class="name-menu">Quản lý người dùng</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fa fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fa fa-newspaper-o"></i>
						<span class="name-menu">Quản lý sự kiện</span>
					</a>
				</li>
				<li>
					<a href="" class="menu-chinh">
						<i class="fa fa-bar-chart"></i>
						<span class="name-menu">Thống kê</span>
					</a>
				</li>

			</ul>
		</div>
	</div>
	<!-- end phần menu trái -->

	<!-- phần nội dung -->
	<div class="noidungchinh" ng-controller="MyController">
		<!-- phần menu trên -->
		<div class="menu-tren">
			<div class="menu-button">
				<a id="menu-toggle" href="#" class="btn btn-default btn-lg toggle"><i class="fa fa-bars"></i></a>
			</div>
			<div class="admin">
				<a href="#" class="admin-avt"><img src="<?= base_url(); ?>vendor/Image/admin.jpg" alt="" width="40px" height="40px"></a>
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
			<div class="quanlysukien">
				<div class="container-fluid">
					<div class="row head_sk">
						<div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
							<div class="btn btn-danger them" data-toggle="modal" data-target="#modalThem" ng-click="addData()">Thêm <i class="fa fa-plus" aria-hidden="true"></i></div>
						</div>
						<div class="col-xs-3 col-sm-7 col-md-7 col-lg-5">
							<p class="tdqlsk">QUẢN LÝ SỰ KIỆN</p>
						</div>

						<div class="col-10 col-sm-7 col-md-7 col-lg-3 input_sk">
							<input type="text" class="form-control" placeholder="Nhập tên sự kiện" ng-model="tukhoa">
							
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1">
							<button type="button" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
				
				<div class="container" ng-repeat="one_new in news| filter : {title:tukhoa}" ng-init="one_new.hienthi=true">
					<div class="row _1sukien" ng-show="one_new.hienthi">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 anhsukien">
							<img ng-src="{{getSrcImg(one_new.image)}}">
						</div>
						<div class="col-9 col-sm-7 col-md-7 col-lg-7 thongtinsk">
							<div class="tdsk">{{one_new.title}}</div><br>
							<div class="dessk">
								{{one_new.description}}
							</div>
							<div class="audiosk">
								<audio ng-src="{{getSrc(one_new.audio)}}" autobuffer autoloop loop controls></audio>
							</div>
							
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1 chucnang_sk">
							<div class="btn btn-outline-primary chinh_sua" data-toggle="modal" data-target="#modalChinhSua" ng-click="thaydoichedo(one_new)"><i class="fa fa-pencil" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-danger xoa" ng-click="xoadulieu(one_new)"><i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="row _1sukien ng-sua" ng-show="!one_new.hienthi">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 test">
							<input type="file" name="file" class="anh_sk"  select-ng-files ng-model="one_new.image" multiple>
							<div class="thongtin">
								<img ng-src="{{getSrcImg(one_new.image)}}">
								<div class="phiaduoi">
									<i class="fa fa-camera" aria-hidden="true"></i> Cập nhật ảnh
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-9 col-md-9 col-lg-9 thongtinsk">
							<div class="tdsk">
								<label>Tiêu đề</label>
								<input class="form-control" type="hidden" ng-model="one_new.NID"></input>
								<input class="form-control" type="text" ng-model="one_new.title"></input>
							</div><br>
							<div class="audiosk">
								<label>Audio</label>
								<br>
								<audio ng-src="{{getSrc(one_new.audio)}}" autobuffer autoloop loop controls></audio>
								<input class="form-control" type="file" select-ng-files ng-model="one_new.audio"></input>
							</div>
							<div class="dessk">
								<label>Thông tin</label>
								<textarea name="" id="ckeditor" ng-editor ng-model="one_new.description"></textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="btn btn-outline-success btn-block edit_event" ng-click="luudulieu(one_new)">Save <i class="fa fa-floppy-o" aria-hidden="true"></i></div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="btn btn-outline-danger btn-block edit_event" ng-click="quaytrolaibandau(one_new)"><i class="fa fa-undo" aria-hidden="true"></i> Cancel</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- <div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phantrang">
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-center">
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
											<span class="sr-only">Previous</span>
										</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
											<span class="sr-only">Next</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div> -->
				
			</div>
			<!-- MODAL -->
			<!-- modal thêm sự kiện -->
			<div class="modal modal_them fade" id="modalThem">
				<div class="modal-dialog">
					<div class="modal-content content_themsk">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title bhmoi">Sự kiện mới</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body body_themsk">
							<div class="themsk">
								<div class="container">
									<form role="form" ng-submit="createNews()">
										<div class="row form_tensk">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Sự kiện</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control" required id="" name="title_news" placeholder="Enter name" ng-model="title" >
											</div>
										</div>
										<div class="row form_tensk">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Audio</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="file" class="form-control" required id="" name="audio_news" placeholder="Enter name" ng-model="audio" select-ng-files>
											</div>
										</div>
										
										<div class="row form_des">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thông tin</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<textarea class="bl" rows="5" cols="" id="ckeditor_them" name="description_news" ng-editor required ng-model="description"></textarea>
											</div>
										</div>

										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="file" class="form-control" id="" name="image_news" placeholder="Choose image" ng-model="image" select-ng-files>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input class="btn btn-success" type="submit" value="Submit" ></input>
											</div>
											
										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>

					</div>
				</div>
			</div>

		</div>
		<!-- end phần ảnh nền -->
	</div>

</body>
</html>