<!DOCTYPE html>
<html>
<head>
  <title>Ket qua tim kiem</title>
  <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../vendor/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../vendor/Bootstrap/css/bootstrap.min.css"> -->
    <script src="../../vendor/Bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
      body {
        line-height: 1.5;
        font-family: Roboto,sans-serif;
        font-size: 14px;
        font-weight: 400;
        background-color: #f3f3f3;
        min-width: 1024px;
      }
      .z-box-title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: auto;
        text-transform: capitalize;
      }
      .container{
        width: 80%;
        margin-right: auto;
        margin-left: auto;
        padding: 10px;
        position: relative;
        background-color: #fcfcfc;
      }
      .active{
        border-bottom: 2px solid #65509e;
        color: #65509e;
      }

      div.z-box-title{
        padding: 10px;
      }
      .z-box-bar{
        padding-left: 10px;
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
        <li><a href="#" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
      </ul>
    </div>
  </div>
</nav><br/><br><br>

<!-- code -->
<div class="container pad-bottom-30">
<!-- title and find bar -->
  <style type="text/css">
    .pad-bottom-30{
      padding-bottom: 30px;
    }
  </style>
      <div class="col-md-12 z-box-title">
        <span class="z-box-title">Kết quả tìm kiếm</span>
      </div>

    <div class="col-md-12 z-box-bar">
      <ul class="nav navbar-nav">
        <li><a role="a" class="nav-link active" href="#">BÀI HÁT</a></li>
        <li><a role="a" class="nav-link" href="#">PLAYLIST</a></li>
        <li><a role="a" class="nav-link" href="#">NGHỆ SĨ</a></li>
      </ul>
    </div>

</div>

<!-- content -->
<div class="container">
  
</div>

<br>  
<footer class="container-fluid text-center" style="background-color: #ffccff;color: #9900e6;">
  <p>
    <br>Một sản phẩm của OCS TEAM <br>
    Địa chỉ: Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội <br>
    Điện thoại: 0123456789 <br>
    Email: ocsteambk@gmail.com <br><br>
    <a href="https://www.facebook.com/"><i class='fab fa-facebook' style='font-size:24px'></i> </a>
    <a href="https://twitter.com/"><i class='fab fa-twitter-square' style='font-size:24px'></i> </a>
    <a href="https://www.instagram.com/"><i class='fab fa-instagram' style='font-size:24px'></i> </a>
  </p>
</footer>

<div id="id01" class="modal">
  <form class="modal-content animate" action="UserForm.html" style="width: 40%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container1">
      <label for="uname"><b>Tài khoản: </b></label>
      <input class="edit1" type="text" placeholder="Nhập tài khoản..." name="uname" required>

      <label for="psw"><b>Mật khẩu: </b></label>
      <input class="edit1" type="password" placeholder="Nhập mật khẩu..." name="psw" required>

      <button class="edit1" type="submit" style="width: 100%; background-color: #ff66ff;">Đăng nhập</button>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <form class="modal-content animate" action="UserForm.html" style="width: 40%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container1">
    <label for="name"><b>Họ và tên: </b></label>
      <input class="edit1" type="text" placeholder="Nhập họ tên..." name="name" required>

    <label for="gender"><b>Giới tính: </b></label><br>
      <input type="radio" name="gender" value="male" checked > Male&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="radio" name="gender" value="female"> Female <br>

      <label for="uname"><b>Tài khoản: </b></label>
      <input class="edit1" type="text" placeholder="Nhập tài khoản..." name="uname" required>

      <label for="psw"><b>Mật khẩu: </b></label>
      <input class="edit1" type="password" placeholder="Nhập mật khẩu..." name="psw" required>

      <label for="psw1"><b>Nhập lại mật khẩu: </b></label>
      <input class="edit1" type="password" placeholder="Nhập mật khẩu..." name="psw1" required>

      <button class="edit1" type="submit" style="width: 100%; background-color: #ff66ff;">Đăng ký</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
