<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Playlist</title>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
	<!-- <script src="https://use.fontawesome.com/b945eec526.js"></script> -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css"> -->
	<!-- <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script> -->
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- font-family: 'Roboto', sans-serif; -->
</head>
<body>
	<!-- quân -->
	<nav class="navbar navbar-fixed-top mynav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #b366ff;">
					<span class="icon-bar" style="background-color: black;"></span>
					<span class="icon-bar" style="background-color: black;"></span>
					<span class="icon-bar" style="background-color: black;"></span>
				</button>
				<a class="navbar-brand" href="#" style="font-size: 30px;">BK.MP3</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#">TOPVIEW</a></li>
					<li><a href="#">NEWS</a></li>
					<li><a href="#">PLAYLIST</a></li>
				</ul>
				<form class="navbar-form navbar-left" action="#">
					<div class="input-group" style="margin-left: 50px;">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="Nhập tên bài hát, ca sĩ..." name="search"autocomplete="off" style="width: 200%;">
					</div>
				</form>
			</div>
		</div>
	</nav>
	<!-- end quân -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="anhtieude">
					<img src="../../New folder/image/pls.JPG" alt="Hình ảnh" style="width:100%;" class="anhtd">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row row1">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="td">PLAYLIST CÁ NHÂN</p>
				<div class="thempl" data-toggle="modal" data-target="#myPlaylist">
					<div class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i> Thêm playlist</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 _1playlist">
				<img src="../image/img-plist-full.jpg" alt="" width="100%">
				<div class="icon-play">
					<i class="fa fa-play-circle-o" aria-hidden="true"></i>
				</div>
				<div class="td_pl">AAAA</div>
				<div class="chinhsua" data-target="#mycsPlaylist" data-toggle="modal">
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<div class="xoa">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
			

		</div>
	</div>

	<div class="modal fade" id="myPlaylist">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Thêm playlist</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="themplaylist">
						<div class="row">
							<form action="" method="POST" role="form">
								<div class="row form_tenpl">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 name_pl">
										<label for="">Playlist</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="text" class="form-control input_name_pl">
									</div>
								</div>
								<div class="row form_ha">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 img_pl">
										<label for="">Hình ảnh</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="file" class="form-control input_img_pl">
									</div>
								</div>
								<div class="row form_mt">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mt_pl">
										<label for="">Mô tả</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 ">
										<textarea name="" class="input_mt_pl" rows="5" cols="47.7"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input class="btn btn-success" value="Add" type="submit"></input>
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
	<div class="modal fade" id="mycsPlaylist">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Chỉnh sửa</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="themplaylist">
						<div class="row">
							<form action="" method="POST" role="form">
								<div class="row form_tenpl">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 name_pl">
										<label for="">Playlist</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="text" class="form-control input_name_pl">
									</div>
								</div>
								<div class="row form_ha">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 img_pl">
										<label for="">Hình ảnh</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="file" class="form-control input_img_pl">
									</div>
								</div>
								<div class="row form_mt">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mt_pl">
										<label for="">Mô tả</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 ">
										<textarea name="" class="input_mt_pl" rows="5" cols="47.7"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input class="btn btn-success" value="EDIT" type="submit"></input>
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
	
</body>
</html>
