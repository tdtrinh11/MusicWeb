<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý kho nhạc</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/Css/admin_quanlykhonhac.css">
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/admin_quanlykhonhac.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/Js/admin_quanlykhonhac_ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/FontAwesome/css/font-awesome.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<!-- font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif; -->
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
						<i class="fa fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
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
						<i class="fa fa-headphones"></i>
						<span class="name-menu">Quản lý kho nhạc</span>
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
						<i class="fa fa-headphones"></i>
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
				<a href="#" class="admin-avt"><img src="<?= base_url(); ?>vendor/Image/admin.jpg" alt="" width="40px" height="40px"></a>
				<div class="admin-info">
					<ul class="list-group">
						<li class="list-group-item"><a href="">
							<span>Thông tin tài khoản</span>
							<i class="fa fa-user-circle"></i>								
						</a></li>
						<li class="list-group-item"><a href="">
							<span>Đăng xuất</span>
							<i class="fa fa-sign-out-alt"></i>								
						</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end phần menu trên -->

		<!-- phần quản lý kho nhạc -->
		<div class="content">
			<p class="tdqlkn">QUẢN LÝ KHO NHẠC</p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- Tab panes -->
						<div class="tab-content">
							<div id="qltbh" class="container-fluid tab-pane active"><br>
								<div class="chucnang">
									<div class="container-fluid">
										<div class="row">
											<div class="col-sm-1 col-md-2 col-lg-6">
												
											</div>
											<div class="col-3 col-xl-1 col-sm-3 col-md-2 col-lg-2 them_bai_moi">
												<div class="btn btn-danger them" data-toggle="modal" data-target="#modalThem">Thêm <i class="fa fa-plus" aria-hidden="true"></i></div>
											</div>
											<div class="col-7 col-xl-3 col-sm-5 col-md-5 col-lg-3 input_tim_bai_hat">
												<input type="text" class="form-control" name="song_name" placeholder="Nhập tên bài hát">
												
											</div>
											<div class="col-1 col-xl-1 col-sm-1 col-md-1 col-lg-1 tim_bai_hat">
												<button type="button" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
												<table class="table dsbh " cellpadding="2px" cellspacing="2px">
													<thead class="thead-light">
														<tr>
															<th>Name</th>
															<th>Singer</th>
															<th class="th_tl">Type</th>
															<th class="th_ha">Image</th>
															<th>Audio</th>
															<th colspan="3"></th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($tatcabaihat as $key => $value):?>
															<tr>
																<td class="sid" hidden="true"><?= $value['SID']?></td>
																<td class="ten_bai_hat"><?= $value['song_name']?></td>
																<td class="ten_ca_si"><?= $value['singer']?></td>
																<td class="ten_nhac_si" hidden="true"><?= $value['artist']?></td>
																<td class="the_loai"><?= $value['type']?></td>
																<td class="hinh_anh"><img src="<?= base_url(); ?>vendor/Image/<?= $value['URL_IMG']?>" class="hinh_anh_bai_hat"></td>
																<td class="audio">
																	<audio src="<?= base_url(); ?>vendor/Music/<?= $value['URL']?>" loop controls controlslist="nodownload"></audio>
																</td>
																<td class="loi_bai_hat" hidden="true"><?= $value['lyric']?></td>
																<td colspan="3" class="chuc_nang">
																	<div class="btn btn-outline-primary chinh_sua" data-toggle="modal" data-target="#modalChinhSua">Chỉnh sửa <i class="fa fa-pencil" aria-hidden="true"></i></div>
																	<div class="btn btn-outline-success chi_tiet" data-toggle="modal" data-target="#modalChiTiet">Chi tiết <i class="fa fa-info" aria-hidden="true"></i></div>
																	<a class="btn btn-outline-danger xoa" href="<?= base_url(); ?>index.php/Admin_quanlykhonhac/XoaBaiHat/<?= $value['SID']?>">Xóa <i class="fa fa-times" aria-hidden="true"></i></a>
																</td>
															</tr>
														<?php endforeach?>
													</tbody>
												</table>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 phantrang">
												<nav aria-label="Page navigation example">
													<ul class="pagination justify-content-center">
														<li class="page-item">
															<a href="<?= base_url();?>index.php/Admin_quanlykhonhac/page/<?= $trangHienTai - 1?>" class="page-link">Previous</a>
														</li>
														<?php for($i = 0; $i < $sotrang; $i++) {?>
															<?php if($i+1 == $trangHienTai) {?>
																<li class="page-item active"><a class="page-link" href="<?= base_url(); ?>index.php/Admin_quanlykhonhac/page/<?= $i+1 ?>"><?= $i+1?></a></li>
															<?php } else {?>
																<li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/Admin_quanlykhonhac/page/<?= $i+1 ?>"><?= $i+1?></a></li>
															<?php } ?>
														<?php } ?>
														<li class="page-item">
															<a href="<?= base_url();?>index.php/Admin_quanlykhonhac/page/<?= $trangHienTai + 1?>" class="page-link">Next</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="timkiemloi" hidden="true">
				Không tìm thấy kết quả phù hợp !!!
			</div>


			<!-- modal thêm nhạc -->
			<div class="modal modal_them fade" id="modalThem">
				<div class="modal-dialog">
					<div class="modal-content content_thembh">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title bhmoi">Bài hát mới</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body body_thembh">
							<div class="themnhac aaa">
								<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
								<div class="container">
									<form action="<?= base_url(); ?>index.php/Admin_quanlykhonhac/ThemBaiHat" method="POST" role="form">
										<div class="row form_tenbh">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Bài hát</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control"  name="ten_bai_hat" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_tencs">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Ca sĩ</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control"  name="ten_ca_si" placeholder="Enter name">
											</div>
										</div>
										
										<div class="row form_tenns">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Nhạc sĩ</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control"  name="ten_nhac_si" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_theloai">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thể loại</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control"  name="the_loai" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_audio">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Audio</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="file" class="form-control"  name="audio" placeholder="Choose image">
											</div>
										</div>
										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="file" class="form-control"  name="avt" placeholder="Choose image">
											</div>
										</div>
										<div class="row form_lbh">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Lời bài hát</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<textarea  rows="5" cols="" id="ckeditor" name="loi_bai_hat"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input class="btn btn-success" value="Submit" type="submit"></input>
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
			
			<!-- modal chinh sua -->
			<div class="modal modal_sua fade" id="modalChinhSua">
				<div class="modal-dialog">
					<div class="modal-content content_chinhsua">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title chinhsua">Chỉnh sửa</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body body_chinhsua">
							<div class="themnhac chinhsua">
								<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
								<div class="container">
									<form action="" method="POST" role="form">
										<div class="row form_tenbh">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Bài hát</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control tbh_sua" name="tbh_sua" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_tencs">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Ca sĩ</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control tcs_sua"  name="tcs_sua" placeholder="Enter name">
											</div>
										</div>
										
										<div class="row form_tenns">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Nhạc sĩ</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control tns_sua"  name="tns_sua" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_theloai">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thể loại</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control tl_sua"  name="tl_sua" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_audio">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Audio</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<audio src="" class="audio_bd" controls></audio>
												<input type="file" class="form-control audio_sua"  name="audio_sua" placeholder="Choose image">
											</div>
										</div>
										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<img src="" alt="" class="img_bd">
												<input type="file" class="form-control ha_sua"  name="ha_sua" placeholder="Choose image">
											</div>
										</div>
										<div class="row form_lbh">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Lời bài hát</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<textarea class="bl lyric_sua" rows="5" cols="" id="ckeditor" name="lyric_sua"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input class="btn btn-success" value="Edit" type="submit"></input>
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


			<!-- modal chitiet -->
			<div class="modal modal_chitiet fade" id="modalChiTiet">
				<div class="modal-dialog">
					<div class="modal-content content_chitiet">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title chitiet">Chi Tiết</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body body_chitiet">
							<div class="themnhac">
								<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
								<div class="container">
									<form action="" method="POST" role="form">
										<div class="row form_tenbh">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Bài hát</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 tbh_ct">
												Cuộc vui cô đơn
											</div>
										</div>
										<div class="row form_tencs">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Ca sĩ</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 tcs_ct">
												Lê Bảo Bình
											</div>
										</div>
										
										<div class="row form_tenns">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Nhạc sĩ</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 tns_ct">
												Nguyễn Huy Dũng
											</div>
										</div>
										<div class="row form_theloai">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thể loại</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 tl_ct">
												Nhạc trẻ
											</div>
										</div>
										<div class="row form_audio">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Audio</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 ">
												<audio src="" autobuffer autoloop loop controls class="audio_ct"></audio>
											</div>
										</div>
										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<img src="" class="img_ct">
											</div>
										</div>
										<div class="row form_lbh">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Lời bài hát</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 lbh_ct">
												Đôi khi tôi vô tình nhìn thấy em .....
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
		<!-- end quản lý kho nhạc -->
	</div>
	<!-- end phần nội dung -->
</body>
</html>

