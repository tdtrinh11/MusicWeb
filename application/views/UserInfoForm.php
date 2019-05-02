<!DOCTYPE html>
<html>
<head>
  <title>Quan Ly Thong Tin</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="quanlythongtin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
    	img {width: 120px;height: 160px;}
    	th, td {padding: 13px;}
    	th {text-align: center;}
    	body {
    		line-height: 1.5;
		    font-weight: 400;
		    background-color: #f3f3f3;
		    min-width: 1024px;
    	}
    	.z-box-title{
	        font-size: 24px;
	        font-weight: 700;
	        margin-bottom: 20px;
	        text-transform: capitalize;
	    }
	    .container{
	        width: 80%;
	        margin-right: auto;
	        margin-left: auto;
	        padding: 10px;
	       /* padding-left: 15px;
	        padding-right: 15px;*/
	        position: relative;
	        background-color: #fcfcfc;
	    }
	    div.z-box-title{
        	padding: 10px;
     	}
    </style>
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
</nav><br/><br><br>

  <!-- code -->
<div class="container ">
  	<div class="bg-gradient-grey pad-top-30 pad-bottom-0">
	    <div class="row">
	      <div class="col-md-12 z-box-title">
	        <span class="z-box-title">Thông tin cá nhân</span>
	      </div>
	    </div>
	</div>
    <div class="userDetail">
    	<center>
    	<table>
	    	<tr>
	    		<th colspan="2">
					<div class="">
						<img title="Vương Ngọc Quân's Photo" class="" src="http://2.bp.blogspot.com/-JAdNFMLXAkc/UvugyhRr3eI/AAAAAAAABBc/SXK2liM1r-I/s1600/anh-gai-dep1a2.jpg" crossorigin="Anonymous">
					</div>
				</th>
			</tr>
			<tr>
				<td>ID</td>
				<td>123quanngoc</td>
			</tr>			 
			<tr>
				<td>Username</td>
				<td>quanngoc</td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td>Vương Ngọc Quân</td>
			</tr>
			<tr>
				<td>Sex</td>
				<td>...</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<a href="#" onclick="document.getElementById('changeInfo').style.display='block'"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa thông tin</a>
				</td>
			</tr>
    	</table>
    	</center>
    </div>
  </div>
<br>
<footer class="container-fluid text-center" style="background-color: #ffccff;color: #9900e6;">
  <p>
    <br>Một sản phẩm của OCS TEAM <br>
    Địa chỉ: Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội <br>
    Điện thoại: 0355111616 <br>
    Email: ocsteambk@gmail.com <br><br>
    <a href="https://www.facebook.com/"><i class='fab fa-facebook' style='font-size:24px'></i> </a>
    <a href="https://twitter.com/"><i class='fab fa-twitter-square' style='font-size:24px'></i> </a>
    <a href="https://www.instagram.com/"><i class='fab fa-instagram' style='font-size:24px'></i> </a>
  </p>
</footer>

<!-- phan chinh sua -->
<div id="changeInfo" class="modal">
	<form class="modal-content animate" action="QuanLyThongTin.html" style="width: 40%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('changeInfo').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container1">
	  <label for="name"><b>Họ và tên: </b></label>
      <input class="edit1" type="text" placeholder="" name="name">

	  <label for="gender"><b>Giới tính: </b></label><br>
      <input type="radio" name="gender" value="male" checked > Male&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  	  <input type="radio" name="gender" value="female"> Female <br>

      <label for="psw"><b>Mật khẩu: </b></label>
      <input class="edit1" type="password" placeholder="Nhập mật khẩu mới..." name="psw">

      <label for="psw1"><b>Nhập lại mật khẩu: </b></label>
      <input class="edit1" type="password" placeholder="Nhập lại mật khẩu..." name="psw1">

      <button class="edit1" type="submit" style="width: 100%; background-color: #ff66ff;">Thay đổi</button>
    </div>
  </form>
</div>
<script>
	// Get the modal
	var modal = document.getElementById('changeInfo');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
</script>

</body>
</html>
