<!DOCTYPE html>
<html>
<head>
	<title>Nghe nhạc</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../vendor/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../vendor/css/music.css">
</head>
<body>
<nav class="navbar navbar-expand-lg myNav">
        <div class="container">
            <a href="index.html" class="navbar-brand home">
                <img src="logo_music_web.png" class="logo" alt="" width='100px'>
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
                        <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-user" aria-hidden="true"></i>  Cá nhân</a>
                    </div>
                    <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block">
                        <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-sign-out" aria-hidden="true"></i>  Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="info-banner-box">
        <div class="container">
            <div class="blur-container" style="background: url(avt.jpg) center center / cover no-repeat rgb(112, 89, 75); width: 84%; height: 220px;"></div>
            <div class="row">
                <div <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sub-container">
                    <a class="medium-card-11">
                        <img src="avt.jpg" alt="" style="width: 160px; height: 160px;">
                    </a>
                    <div class="info-banner-body clearfix">
                        <div class="left-info">
                            <h3 id="name-song-main">Một bước yêu vạn dạm đau</h3>
                            <div class="artist-name" id="artist-name-main">
                                <a role="button">Emily</a>
                            </div>
                            <div class="subtext authors">
                                Sáng tác: <a role="button">Emily</a>
                            </div>
                             <div class="subtext category">
                                Thể loại: <a role="button">Emily</a>
                            </div>
                        </div>
                        <div class="right-info">
                            <div class="log-stats">
                                <div class="viewed">
                                    <i class="fa fa-play" aria-hidden="true"></i>9,999
                                </div>
                                <div class="download">
                                    <i class="fa fa-download" aria-hidden="true"></i>5,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- phần chức năng -->

    <section class="user-interaction-box">
        <div class="container">
            <div class="sub-container">
                <div class="play-song">
                    <a class="btn btn-default play1" id="play-pause">
                        <i class="fa fa-play" id="play1-song" aria-hidden="true"></i>
                        <i class="fa fa-pause" id="pause-song" aria-hidden="true"></i>Nghe bài hát
                    </a>
                </div>
                <div class="user-interaction-wrapper">
                    <a href="#comment" class="comment">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>Bình luận
                    </a>
                    <a href="" class="addList">
                        <i class="fa fa-plus" aria-hidden="true"></i>Thêm
                    </a>
                    <a href="" class="down">
                        <i class="fa fa-download" aria-hidden="true"></i>Tải xuống
                    </a>
                </div>
            </div>
        </div>
    </section> 

    <!-- phần lời bài hát và bình luận -->

    <section class="info-player">
        <div class="container info">
            <div class="sub-conatiner-info">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <!-- phần lời bài hát -->
                        <div class="lyrics-wrapper">
                            <h3>Lời bài hát</h3>
                            <div class="lyrics-text">
                                <div>
                                    <span>
                                        <span width=0>
                                            <span>
                                                <p class="lyrics-text">
                                                    Đã bao giờ anh nghe, có vài điều khi yêu
                                                    <br>Một là không nói dối, hai là ko nói dối nhiều lần
                                                    <span id="dots">...</span><span id="more">
                                                    <br>Cớ sao toàn thấy nước mắt
                                                    <br>Cớ sao toàn những vết cắt
                                                    <br>Có lẽ nào đến lúc, khi hai ta đã hết yêu
                                                    <br>Cứ đi rồi sẽ đến, cứ im lặng sẽ qua
                                                    <br>Một người như thế đấy
                                                    <br>Yêu là yêu đến hết đời này
                                                    <br>Em không là thế giới ấy
                                                    <br>Em thật là nhỏ bé thôi
                                                    <br>Tại sao em cứ ấp úng mãi không bao giờ nói ra
                                                	</span>
                                                </p>
                                            </span>
                                            <span class="more">
                                                <a class="full-view" id="myBtn">Xem thêm</a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end phần lời bài hát -->

                        <!-- phần bình luận -->
                        <div id="comment">
                            <h3>333 Bình luận</h3>
                            <div class="z-show">
                                <form class="frm-reply">
                                    <div class="comment-input-wrapper">
                                        <div class="comment-avatar">
                                            <img src="avt.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                                        </div>
                                        <div class="text-input-wrapper">
                                            <input id="main-text-comment" type="text" placeholder="Nhập bình luận của bạn...">
                                        </div>
                                    </div>
                                    <div class="btn-actions-wrapper">
                                        <a class="btn btn-danger delete">hủy</a>
                                        <button class="btn btn-default" id="button-commit">Bình luận</button>
                                    </div>
                                </form>
                            </div>

                            <div class="comment-list-wrapper">
                            	<ul class="list-comment">
                            		<li class="comment-item">
                            			<p class="medium-circle-card comment-avatar">
                            				<img src="avt.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                            			</p>
                            			<div class="post-comment">
                            				<p class="username">
                            					Eminem
                            					<span class="reply-ago-time">2 giờ trước</span>
                            				</p>
                            				<p class="content">Hm, you sing very nice</p>
                            			</div>
                            		</li>
                            		<li class="comment-item">
                            			<p class="medium-circle-card comment-avatar">
                            				<img src="avt.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                            			</p>
                            			<div class="post-comment">
                            				<p class="username">
                            					Eminem
                            					<span class="reply-ago-time">2 giờ trước</span>
                            				</p>
                            				<p class="content">Hm, you sing very nice</p>
                            			</div>
                            		</li>
                            		<li class="comment-item">
                            			<p class="medium-circle-card comment-avatar">
                            				<img src="avt.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                            			</p>
                            			<div class="post-comment">
                            				<p class="username">
                            					Eminem
                            					<span class="reply-ago-time">2 giờ trước</span>
                            				</p>
                            				<p class="content">Hm, you sing very nice</p>
                            			</div>
                            		</li>
                            		<li class="comment-item">
                            			<p class="medium-circle-card comment-avatar">
                            				<img src="avt.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                            			</p>
                            			<div class="post-comment">
                            				<p class="username">
                            					Eminem
                            					<span class="reply-ago-time">2 giờ trước</span>
                            				</p>
                            				<p class="content">Hm, you sing very nice</p>
                            			</div>
                            		</li>
                            	</ul>
                            </div>
                        </div>
                        <!-- end phần bình luận -->
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </section> 


    <div class="miniplayer">
		<div class="miniplayer-container">
			<div class="miniplayer-inner">
				<div class="control-container audioPlayer">
					<div class="miniplayer-control">
						<a class="btn-previous" title="previous">
							<i class="fa fa-step-backward" aria-hidden="true"></i>
						</a>
						<a class="btn-play play" id="player">
							<i class="fa fa-play-circle" aria-hidden="true"></i>
							<i class="fa fa-pause-circle-o" aria-hidden="true"></i>
						</a>
						<a class="btn-next" title="next">
							<i class="fa fa-step-forward" aria-hidden="true"></i>
						</a>
					</div>
					<div class="info-detail">
						<div class="song-info">
							<span class="song-name">
								<a href="">Dừng lại đi, tôi mệt rồi</a>
							</span>
							<span class="artist">
								<a>-EMI</a>
							</span>
							<div class="player-timer">
								<span class="timer-left">00:00</span>
								<div class="slider">
									<div class="loaded">
										<div class="pace"></div>
										<a href="#" class="slider-handle" style="left: 0%;"></a>
									</div>
								</div>
								<span class="timer-right">00:00</span>
							</div>
						</div>
					</div>
					<div class="features-wrapper">
						<ul class="miniplayer-action">
							<li class="volume-container">
								<a class="btn-volume up">
									<i class="fa fa-volume-up" aria-hidden="true"></i>
									<i class="fa fa-volume-off" aria-hidden="true"></i>
								</a>
								<div class="outer">
									<div class="inner">
										<div class="inner-bar">
											<div class="inner-bar-fill">
												<div class="inner-handle"></div>
											</div>
										</div>
									</div>
									
								</div>
							</li>
							<li class="download">
								<a class="btn-downnload">
									<i class="fa fa-download" aria-hidden="true"></i>
								</a>
							</li>
							<li class="playlist">
								<a class="btn-playlist">
									<i class="fa fa-list" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
					<audio class="audio">
						<source src="1.mp3">
					</audio>
                    <audio class="audio">
                        <source src="2.mp3">
                    </audio>
				</div>
			</div>
		</div>
	</div>
</body>
</html>