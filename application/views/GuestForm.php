<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/FontAwesome/css/font-awesome.css">
	
	
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/Css/guest_form.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/Css/nav.css">




	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/guest_form.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/nav.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg myNav">
		<div class="container">
			<a href="index.html" class="navbar-brand home">
				<img src="<?= base_url(); ?>vendor/Image/logo_music_web.png" class="logo" alt="" width='100px'>
			</a>
			<div class="navbar-buttons">
				<button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler">
					<span class="sr-only">Toggle search</span>
					<i class="fa fa-user" aria-hidden="true"></i>
				</button>
				<a href="basket.html" class="btn btn-outline-secondary navbar-toggler">
					<i class="fa fa-sign-in" aria-hidden="true"></i>
				</a>
			</div>
			<div id="navigation" class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Playlist</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Contact</a>
					</li>
					
					<form class="form-inline" action="/action_page.php">
						<div class="input-group">
							<input type="text" class="form-control input_tk" placeholder="search ...">
							<div class="input-group-btn">
								<button class="btn btn-success search_i" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div> 
					</form>
				</ul>
				<div class="navbar-buttons d-flex justify-content-end">
					<div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block">
						<a href="" class="btn btn-primary navbar-btn"> Login <i class="fa fa-user" aria-hidden="true"></i>
						</a>
					</div>
					<div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block">
						<a href="" class="btn btn-primary navbar-btn"> Register <i class="fa fa-sign-in" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container car">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url(); ?>vendor/Image_User/lbb.jpg" alt="Los Angeles" width="100%">
					<div class="carousel-caption">
						<h3>Los Angeles</h3>
						<p>We had such a great time in LA!</p>
					</div>   
				</div>
				<div class="carousel-item">
					<img src="<?= base_url(); ?>vendor/Image_User/lbb.jpg" alt="Chicago" width="100%">
					<div class="carousel-caption">
						<h3>Chicago</h3>
						<p>Thank you, Chicago!</p>
					</div>   
				</div>
				<div class="carousel-item">
					<img src="<?= base_url(); ?>vendor/Image_User/lbb.jpg" alt="New York" width="100%">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>We love the Big Apple!</p>
					</div>   
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>
	<div class="container text-left tdchart">
		#ZONCHART
	</div>
	<div class="container text-right">
		<div class="full_listen">
			<div class="btn btn-outline-info"><i class="fa fa-play"></i> Nghe tất cả</div>
		</div>
	</div>
	<div class="container container_chart">
		<div class="row chart">
			<div class="container">

				<div class="row row_full_height">
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 realtime-list-song">
						<ul class="list-info">
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="col-0 col-sm-0 col-md-0 col-lg-6 realtime-list-song list_right">
						<ul class="list-info">
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							<li class="one_song_top">
								<div class="layout1 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 top_number">
										01
									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_img">
										<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 top_info">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_name_song">
												Đừng bắt em làm nữa, Em mệt rồi
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 top_singer">
												MIN
											</div>
										</div>
									</div>
								</div>
								<div class="layout2 row">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 layout2_1">

									</div>
									<div class="col-3 col-sm-3 col-md-3 col-lg-3 top_play">
										<i class="fa fa-play-circle" aria-hidden="true"></i>
									</div>
									<div class="col-7 col-sm-7 col-md-7 col-lg-7 layout2_2">

									</div>
								</div>
							</li>
							

						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="container text-left tdbhm">
		BÀI HÁT MỚI
	</div>
	<div class="container text-right">
		<div class="full_listen">
			<div class="btn btn-outline-info"><i class="fa fa-play"></i> Nghe tất cả</div>
		</div>
	</div>

	<div class="container container-bhm">
		<div class="row bhm">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 one_bhm">
				<div class="layout1_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 bhm_img">
						<img src="<?= base_url(); ?>vendor/Image_User/min.jpg" class='img-responsive'>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 bhm_info">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_name_song">
							Đừng bắt em làm nữa, Em mệt rồi
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 bhm_singer">
							MIN
						</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_add">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_down">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo1_bhm_chitiet">
					</div>

				</div>
				<div class="layout2_bhm row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_play">
						<i class="fa fa-play-circle" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-sm-8 col-md-7 col-lg-8 lo2_bhm_info">
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_add">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_down">
						<i class="fa fa-download" aria-hidden="true"></i>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 lo2_bhm_chitiet">
						<i class="fa fa-info" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			

		</div>
	</div>
	<footer class="container-fluid text-center" style="background-color: #8080800f;color: black;">
		<p style="margin-bottom: 0;">
			<br>Một sản phẩm của OCS TEAM <br>
			Địa chỉ: Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội <br>
			Điện thoại: 0355111616 <br>
			Email: ocsteambk@gmail.com <br><br>
			<a href="https://www.facebook.com/" class='contact' target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="https://twitter.com/" class='contact' target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/" class='contact' target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</p>
	</footer>
	<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold">Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mx-3">
				<div class="md-form mb-5">
					<i class="fa fa-user prefix grey-text"></i>
					<input type="text" id="form3" class="form-control validate">
					<label data-error="wrong" data-success="right" for="form3">Your name</label>
				</div>

				<div class="md-form mb-4">
					<i class="fa fa-envelope prefix grey-text"></i>
					<input type="email" id="form2" class="form-control validate">
					<label data-error="wrong" data-success="right" for="form2">Your email</label>
				</div>

			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button class="btn btn-indigo">Login <i class="fa fa-paper-plane-o ml-1"></i></button>
			</div>
		</div>
	</div>
</div>

<div class="text-center">
	<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Launch
	Modal Subscription Form</a>
</div>
<script type="text/javascript">
	$(document).ready(function() {

		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			console.log(scrollTop);

			if(scrollTop > 50) {
				$('.navbar-brand').css('line-height','20px');
				$('.navbar-left').css('margin-top','8px');
				$('.navbar-inverse').css('font-size','15px');
				$('.navbar-nav').children('li').children('a').css('line-height','20px');
				$('.navbar-inverse').css('background-color','#F7F7F7');
			} else {
				$('.navbar-brand').css('line-height','40px');
				$('.navbar-left').css('margin-top','18px');
				$('.navbar-inverse').css('font-size','19px');
				$('.navbar-nav').children('li').children('a').css('line-height','40px');
				$('.navbar-inverse').css('background-color','#FCFCFC');
			}
		});
	});
</script>
</body>
</html>