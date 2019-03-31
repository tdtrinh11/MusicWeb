<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<!-- <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
	<script type="text/javascript" src="vendor/js/bootstrap.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- font-family: 'Nunito', sans-serif; -->
	
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="quanlysukien.css">
	<script type="text/javascript" src="quanlysukien.js"></script>
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/font-awesome.css">
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
	
		<!-- phần ảnh nền -->
		<div class="content">
			<div class="quanlysukien">
				<div class="container-fluid">
					<div class="row head_sk">
						<div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
							<div class="btn btn-danger them" data-toggle="modal" data-target="#modalThem">Thêm <i class="fa fa-plus" aria-hidden="true"></i></div>
						</div>
						<div class="col-xs-3 col-sm-7 col-md-7 col-lg-5">
							<p class="tdqlsk">QUẢN LÝ SỰ KIỆN</p>
						</div>

						<div class="col-10 col-sm-7 col-md-7 col-lg-3 input_sk">
							<input type="text" class="form-control" placeholder="Nhập tên sự kiện">
							
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1">
							<button type="button" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="row _1sukien">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 anhsukien">
							<img src="image/13874f1a39ed820f5159a55fd10736b1.jpg">
						</div>
						<div class="col-9 col-sm-7 col-md-7 col-lg-7 thongtinsk">
							<div class="tdsk">Sơn Tùng ra mắt sản phẩm mới</div><br>
							<div class="dessk">
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....

							</div>
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1 chucnang_sk">
							<div class="btn btn-outline-primary chinh_sua" data-toggle="modal" data-target="#modalChinhSua">Chỉnh sửa <i class="fa fa-pencil" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-success chi_tiet" data-toggle="modal" data-target="#modalChiTiet">Xem chi tiết <i class="fa fa-info" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-danger xoa">Xóa <i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="row _1sukien">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 anhsukien">
							<img src="image/13874f1a39ed820f5159a55fd10736b1.jpg">
						</div>
						<div class="col-9 col-sm-7 col-md-7 col-lg-7 thongtinsk">
							<div class="tdsk">Sơn Tùng ra mắt sản phẩm mới</div><br>
							<div class="dessk">
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....

							</div>
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1 chucnang_sk">
							<div class="btn btn-outline-primary chinh_sua" data-toggle="modal" data-target="#modalChinhSua">Chỉnh sửa <i class="fa fa-pencil" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-success chi_tiet" data-toggle="modal" data-target="#modalChiTiet">Xem chi tiết <i class="fa fa-info" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-danger xoa">Xóa <i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="row _1sukien">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 anhsukien">
							<img src="image/13874f1a39ed820f5159a55fd10736b1.jpg">
						</div>
						<div class="col-9 col-sm-7 col-md-7 col-lg-7 thongtinsk">
							<div class="tdsk">Sơn Tùng ra mắt sản phẩm mới</div><br>
							<div class="dessk">
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
								Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....

							</div>
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1 chucnang_sk">
							<div class="btn btn-outline-primary chinh_sua" data-toggle="modal" data-target="#modalChinhSua">Chỉnh sửa <i class="fa fa-pencil" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-success chi_tiet" data-toggle="modal" data-target="#modalChiTiet">Xem chi tiết <i class="fa fa-info" aria-hidden="true"></i></div><br>
							<div class="btn btn-outline-danger xoa">Xóa <i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
					</div>
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
				</div>
			</div>
			<!-- MODAL -->
			<!-- modal thêm sự kiện -->
			<div class="modal modal_them" id="modalThem">
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
									<form action="" method="POST" role="form">
										<div class="row form_tensk">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Sự kiện</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control" id="" name="" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_des">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thông tin</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<textarea class="bl" rows="5" cols="" id="ckeditor" name="des"></textarea>
											</div>
										</div>
										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="file" class="form-control" id="" name="avt" placeholder="Choose image">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<div class="btn btn-success">Submit</div>
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
			<div class="modal modal_sua" id="modalChinhSua">
			  	<div class="modal-dialog">
			    	<div class="modal-content content_chinhsua">

			      		<!-- Modal Header -->
			      		<div class="modal-header">
			        		<h4 class="modal-title chinhsua">Chỉnh sửa</h4>
			        		<button type="button" class="close" data-dismiss="modal">&times;</button>
			      		</div>

			      		<!-- Modal body -->
			      		<div class="modal-body body_chinhsua">
			      			<div class="chinhsuask">
				        		<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
								<div class="container">
									<form action="" method="POST" role="form">
										<div class="row form_tensk">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Sự kiện</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="text" class="form-control" id="" name="" placeholder="Enter name">
											</div>
										</div>
										<div class="row form_des">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thông tin</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<textarea class="bl" rows="5" cols="" id="ckeditor" name="des"></textarea>
											</div>
										</div>
										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<input type="file" class="form-control" id="" name="avt" placeholder="Choose image">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<div class="btn btn-success">Submit</div>
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
			<div class="modal modal_chitiet" id="modalChiTiet">
			  	<div class="modal-dialog">
			    	<div class="modal-content content_chitiet">

			      		<!-- Modal Header -->
			      		<div class="modal-header">
			        		<h4 class="modal-title chitiet">Chi Tiết</h4>
			        		<button type="button" class="close" data-dismiss="modal">&times;</button>
			      		</div>

			      		<!-- Modal body -->
			      		<div class="modal-body body_chitiet">
			      			<div class="chitiet">
				        		<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
								<div class="container">
									<form action="" method="POST" role="form">
										<div class="row form_tensk">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Sự kiện</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												Sơn Tùng ra mắt sản phẩm mới
											</div>
										</div>
										<div class="row form_des">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Thông tin</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
												Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
												Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
												Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
												Sản phẩm hứa hẹn với khán giá nói chung và sky nói chung .....
											</div>
										</div>
										<div class="row form_ha">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<label for="">Hình ảnh</label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
												<img src="image/13874f1a39ed820f5159a55fd10736b1.jpg" alt="" class="sk">
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
	<!-- end phần nội dung -->
	<!-- <script type="text/javascript" src="1.js"></script> -->
</body>
</html>