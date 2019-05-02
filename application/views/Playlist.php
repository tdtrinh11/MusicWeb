<!DOCTYPE html>
<html>
<head>
	<title>Playlist</title>
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
</nav><br><br><br>
<img src="image/pls.jpg" alt="Hình ảnh" style="width:100%;">
<br><br>
  <span class="myText">Playlist cá nhân</span>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="document.getElementById('id03').style.display='block'"><button type="button" class="mybutton" style="margin-right: 100px;"><span class="glyphicon glyphicon-plus"></span> Tạo Playlist mới</button></a></li>
    </ul>
        <br><br>
<div class="container" style="width: 90%;">
  <div class="row">
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="#" class="myCaption">
          <img src="image/pls0.jpg" style="width:100%">
          <div class="caption">
            <br>
            <p class="captionText">Đó là một câu chuyện buồn</p>
          </div>
        </a>
      </div>
    </div>
</div>
</div>
<div id="id03" class="modal">
  <form class="modal-content animate" action="Playlist.html" style="width: 40%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container1">
      <input class="img" type="file" required>
	  <label for="name"><b>Tên Playlist: </b></label>
      <input class="edit1" type="text" placeholder="Tên của Playlist mới" name="name" required>

      <label for="uname"><b>Mô tả Playlist </b></label>
      <input class="edit1" type="text" placeholder="Giới thiệu về playlist này" name="uname" required>

      <button class="mybutton" type="submit" style="width: 15%; background-color: purple;">Lưu</button>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>