<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý thông tin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/FontAwesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
	
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-animate.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-messages.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js_Ng/angular-material.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Css/user_info_form.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/user_info_form.js"></script>
</head>
<body ng-app="myApp" >
	<div class="container">
		<div class="span3 well">
			<center>
				<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
				<h3>Joe Sixpack</h3>
				<em>click my face for more</em>
			</center>
		</div>
	</div>
	<div class="col-xs- col-sm- col-md- col-lg-">
		
	</div>
	<div class="container" ng-controller="MyController">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
				<div class="card" ng-show="hienthi">
					<div class="card-block">
						<div class="card-header">
							Thông tin cá nhân
							<b class="float-right"><i class="fa fa-pencil csprofile" ng-click="chedosua()"></i></b>
						</div>
						<div class="card-body">
							<div class="card-text">
								<b>Tên đăng nhập</b> : dungnh
							</div>
							<div class="card-text">
								<b>Họ và tên</b> : Nguyễn Huy Dũng
							</div>
							<div class="card-text">
								<b>Giới tính</b> : Nữ
							</div>
						</div>
					</div>
				</div>
				<div class="card" ng-show="!hienthi">
					<div class="card-block">
						<div class="card-header">
							Chỉnh sửa thông tin

						</div>
						<div class="card-body">
							<div class="card-text">
								<b>Tên đăng nhập</b>
								<input type="text" class="form-control" disabled name="" value="dungnh">
							</div>
							<div class="card-text">
								<b>Họ và tên</b>
								<input type="text" class="form-control" name="" value="Nguyễn Huy Dũng">
							</div>
							<div class="card-text test">
								<b>Ảnh đại diện</b><br>
								<input type="file" name="file" class="anh_sk"  select-ng-files ng-model="one_new.image" multiple>
								<div class="thongtin">
									<img ng-src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R">
									<div class="phiaduoi">
										<i class="fa fa-camera" aria-hidden="true"></i> Cập nhật ảnh
									</div>
								</div>
							</div>
							<div class="card-text">
								<b>Giới tính</b></br>
								<input type="radio" name="gender" value="male" checked > Male&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								<input type="radio" name="gender" value="female"> Female <br>
							</div>
							<div class="card-text">
								<b>Mật khẩu cũ</b>
								<div class="input-group">
									<input type="{{inputType1}}" name="password" class="form-control input-lg" ng-model="password_field1" placeholder="Enter Password" />
									<span class="input-group-addon">
										<span class="{{showHideClass1}}" ng-click="showPassword1()" style="cursor:pointer"></span>
									</span>
								</div>
							</div>
							<div class="card-text">
								<b>Mật khẩu mới</b>
								<div class="input-group">
									<input type="{{inputType2}}" name="password" class="form-control input-lg" ng-model="password_field2" placeholder="Enter Password" />
									<span class="input-group-addon">
										<span class="{{showHideClass2}}" ng-click="showPassword2()" style="cursor:pointer"></span>
									</span>
								</div>
							</div>
							<div class="card-text">
								<b>Nhập lại mật khẩu mới</b>
								<div class="input-group">
									<input type="{{inputType3}}" name="password" class="form-control input-lg" ng-model="password_field3" placeholder="Enter Password" />
									<span class="input-group-addon">
										<span class="{{showHideClass3}}" ng-click="showPassword3()" style="cursor:pointer"></span>
									</span>
								</div>
							</div>

						</div>
						<div class="btn btn-outline-success btn-block" ng-click="thaydoi()">Thay đổi</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>

</body>
</html>
