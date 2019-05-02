<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

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
        <li><a href="#topview">TOPVIEW</a></li>
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
      <div class="nav navbar-nav navbar-right dropdown" style="margin-top: 8px;">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Vương Ngọc Quân
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Sửa thông tin</a></li>
          <li><a href="GuestForm.html">Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><br/><br>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/lbb.jpg" alt="Hình ảnh" style="width:100%;">
      </div>

      <div class="item">
        <img src="image/cd.jpg" alt="Hình ảnh" style="width:100%;">
      </div>

      <div class="item">
        <img src="image/ap.jpg" alt="Hình ảnh" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
	<hr style="color: red;">
</div>
<div class="container">
  <span class="myText" id="topview">TOP VIEW</span>
<div class="container" style="width: 90%;">
  <div class="row">
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/cvcd.jpg" class="captionIMG" alt="Hình ảnh" style="width:100%">
          <div class="caption">
            <p class="captionText">CUỘC VUI CÔ ĐƠN<br>LÊ BẢO BÌNH</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container">
	<hr style="color: red;">
</div>
<div class="container">
	<span class="myText">BÀI HÁT MỚI</span>
	<div class="container" style="width: 90%">
		<div class="row">
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media">
				   <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="media">
					<a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media">
				    <a href="#" class="myMediaText">
					    <div class="media-left">
					      <img src="image/cvcd.jpg" class="media-object" style="width:60px">
					    </div>
					    <div class="media-body">
					      <p class="media-heading">Cuộc vui cô đơn</p>
					      <p>Lê Bảo Bình</p>
					    </div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<hr style="color: red;">
</div>
<footer class="container-fluid text-center" style="background-color: #f3f3f3;color: #9900e6;">
  <p>
    <br>Một sản phẩm của OCS TEAM <br>
    Địa chỉ: Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội <br>
    Điện thoại: 0355111616 <br>
    Email: ocsteambk@gmail.com <br><br>
    <a href="https://www.facebook.com/" target="_blank"><i class='fab fa-facebook' style='font-size:24px'></i> </a>
    <a href="https://twitter.com/" target="_blank"><i class='fab fa-twitter-square' style='font-size:24px'></i> </a>
    <a href="https://www.instagram.com/" target="_blank"><i class='fab fa-instagram' style='font-size:24px'></i> </a>
  </p>
</footer>

</body>
</html>