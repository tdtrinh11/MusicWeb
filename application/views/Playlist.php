<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Playlist</title>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/FontAwesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Css/playlist.css">
</head>
<body>
	<!-- end quân -->
	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="anhtieude">
					<img src="../../New folder/image/pls.JPG" alt="Hình ảnh" style="width:100%;" class="anhtd">
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row row1">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p class="td">PLAYLIST CÁ NHÂN</p>
				<div class="thempl" data-toggle="modal" data-target="#modalThem">
					<div class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i> Thêm playlist</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 _1playlist">
				<img src="<?= base_url(); ?>vendor/Image_playlist/img-plist-full.jpg" alt="" width="100%">
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

	<div class="modal modal_them fade" id="mycsPlaylist">
		<div class="modal-dialog">
			<div class="modal-content content_cspl">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title bhmoi">Chỉnh sửa playlist</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body body_cspl">
					<div class="themplaylistt">
						<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
						<div class="container">
							<form action="" method="POST" role="form" id="formCs">
								<div class="row form_tenpl_edit">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Playlist</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="text" class="form-control edit_name" required name="ten_pl" placeholder="Playlist">
									</div>
								</div>
								<div class="row form_ha">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Hình ảnh</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<img class="img_bd" src="<?= base_url(); ?>vendor/Image_playlist/img-plist-full.jpg"></img>
										<input type="file" class="form-control edit_image" required name="avt" placeholder="">
									</div>
								</div>
								<div class="row form_mt">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Mô tả</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> 
										<textarea  rows="5" cols="" class="form-control edit_mt" required name="mota" placeholder="Mô tả playlist"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<div class="btn btn-success editPl">Edit</div>
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


	<!-- modal thêm nhạc -->
	<div class="modal modal_them fade" id="modalThem">
		<div class="modal-dialog">
			<div class="modal-content content_thempl">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title bhmoi">Bài hát mới</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body body_thempl">
					<div class="themplaylistt">
						<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
						<div class="container">
							<form action="" method="POST" role="form" id="formThem">
								<div class="row form_tenpl">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Playlist</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="text" class="form-control add_tpl" required name="ten_pl" placeholder="Playlist">
									</div>
								</div>
								<div class="row form_ha">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Hình ảnh</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="file" class="form-control add_image" required name="avt" placeholder="">
									</div>
								</div>
								<div class="row form_mt">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Mô tả</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> 
										<textarea  rows="5" cols="" class="form-control add_mt" required name="mota" placeholder="Mô tả playlist"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<div class="btn btn-success addPl">Add</div>
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
