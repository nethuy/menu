<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu Game - Net Huy</title>
<link rel="icon" href="image/favicon.ico" type="image/x-icon">
<script type='text/javascript' src='times.js'></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
}
.menu {
	width: 1280px;
    height: 720px;
    margin: 0 auto;
	position: relative;
}
h2 {    
	font-size: 25px;
    margin: 10px 0;
    padding: 0;
}

.left {
	float:left;
	width: 20%;
	height: 100%;
	background: blueviolet;
	text-align: center;
}

.right {
  width: 80%;
  float:right;
  height: 100%;
}

.header {
    text-align: center;
    font-size: 24px;
    width: 100%;
    height: 10%;
    background: yellow;
    font-weight: bold;
}

.content {
	width: 100%;
	height: 90%;
	background: aquamarine;
}

/* @media (max-width: 600px) {
  .left, .right {
    width: 100%;

  }
} */

html {
    background: black;
}
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 335px;
  z-index: 0;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  width: 128px;
  height: 128px;
  background-image: url("");

}

#myDiv {
  display: none;
  text-align: center;
}

.loader-content{
	width:1280px;
	height:720px;
	margin: 0 auto;
	font-family: arial,sans-serif;
}

.logo {
    margin: 28px;
}
.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 100%;
  display: block;
  font-weight: bold;
  position: relative;
}
.btn-group{height:;}
.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
.top h1 {
    line-height: 1.6;
    text-align: center;
}
.tabcontent {
    padding: 5px 15px;
	height: 95%;
}
h3 {text-align: center;}

.ver {
    font-size: 12px;
    font-weight: bold;
    background: white;
    padding: 4px;
    border-radius: 3px;
    border: 1px solid #3c3c3c;
    cursor: pointer;
    line-height: 1.4;
}
.ver:hover {
    background: #d2d2d2;
}
.ver-bottom {
    width: 104px;
    margin: auto;
}
.ver-content{
	position: relative;
    top: 5%;
    font-size: 15px;
    font-weight: 600;
}
<!-- menu-content -->
.menu-content {
   
}
.content-ul {
	width: auto;
    max-height: 530px;
    overflow: overlay;
	padding-top: 5px;
}

.conetent-li {
	display: inline-grid;
    float: left;
    margin-right: 15px;
    margin-bottom: 15px;
	cursor: pointer;
	height: 330px;
	box-shadow: 5px 5px 10px grey;
	position: relative;
}
.conetent-li:hover {
	position: relative;
    top: -2px;
}
.content-img {

}

.content-img img {
	height: 287px;
  width: 215px;
}
.content-name {

}

.content-name-a {
	border-top: 1px solid #ccc;
    color: #332a2a;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 600;
    cursor: pointer;
    top: -10px;
    background: aliceblue;
    margin: 10px 0;
    padding: 10px;
    display: block;
    position: relative;
}
.website {
    font-size: 12px;
    font-weight: 500;
    color: white;
    position: relative;
    top: 5px;
}
.website a {
	cursor: pointer;
	color: white;
    text-decoration: initial;
}
.website a:hover {color: #00e7ff;}
<!-- end menu-content -->

<!-- Play popup -->
.play {
  background-color: #ccc;
  color: black;
}

.container {
  text-align: center;
}
.modal {
    display: none;
    z-index: 0;
    background-color: rgba(101, 144, 102, 0.3);
	backdrop-filter: blur(1px);
    width: 100%;
    position: relative;
    top: -349px;
    height: 286px;
	cursor: default;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

.close {
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
    position: relative;
    float: right;
    right: 8px;
}

.close:hover{
  color: #f44336;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.play {
    text-align: center;
    position: relative;
    top: 135px;
    left: 15px;
}
<!-- End Play popup -->

.button-normal {
    -webkit-appearance: button;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark-color(buttontext, rgb(170, 170, 170));
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark-color(rgb(239, 239, 239), rgb(74, 74, 74));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark-color(rgb(118, 118, 118), rgb(195, 195, 195));
    border-image: initial;
}

<!-- play-button -->
.play-button::after {   padding: 8px 16px !important;   font-size: 14px !important;   text-align: center !important;   cursor: pointer !important;   outline: none !important;   color: #fff !important;   background-color: #4CAF50 !important;   border: none !important;   border-radius: 5px !important;   box-shadow: 0 4px #999 !important; }
.play-button:hover {background-color: #3e8e41 !important;} 
.play-button:active {   background-color: #3e8e41 !important;   box-shadow: 0 3px #666 !important;   transform: translateY(2px) !important; }
<!-- End play-button -->

</style>
</head>

<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="loader-content">

<div class="menu">
<!-- left -->
<div class="left">
<div class="logo" ><a style="cursor: pointer;" onclick="location.href='chao.html'" target="_blank"><img src="logo.png"/></a></div>
<div class="btn-group">
	<button class="button" onclick="openCity(event, 'thongbao'); menuclick();" id="defaultOpen">Thông Báo</button>
	<button class="button" onclick="openCity(event, 'online'); menuclick();">Game Online</button>
	<button class="button" onclick="openCity(event, 'offline'); menuclick();">Game Offline</button>
	<button class="button" onclick="openCity(event, 'mobile'); menuclick();">Game Mobile</button>
	<button class="button" onclick="openCity(event, 'phanmem'); menuclick();">Phần Mềm</button>
	<button class="button" onclick="openCity(event, 'khoacc'); menuclick();">Kho Acc Free<span style="position: absolute; padding: 5px; border-radius: 50%; color: white; background-color: red; font-size: 10px; line-height: 1; top: 5px; right: 5px; opacity: 0.8;">Mới</span></button>
	<button class="button" onclick="openCity(event, 'dichvu'); menuclick();">Dịch Vụ</button>
</div>

<!-- time --><div style="height: 160px;"><span style="color: white; font-size: 20px; font-weight: 600; position: relative; top: 50%;" id="clock" ></span></div>

<div class="ver-bottom">
	<div class="ver" onclick="openCity(event, 'ver'); clickli();"><b>Phiên Bản 1.1</b></div>
</div>
<span class="website">Website: <a onclick="location.href='https://nethuy.cf'">www.nethuy.cf </a></span>
</div>
<!-- end left -->

  
<div class="right">
  <div class="header">
	<div style="padding: 22px 0;">
		<a>Tự đóng ứng dụng: Đè phím <a style="color: red;">"Ctrl"</a> và <a style="color: red;">"Alt"</a> sau đó nhấn phím <a style="color: red;">"K"</a> hai lần.</a>
	</div>
  </div>
  
<div class="content">
<style>
.mySlides {display: none}
img {vertical-align: middle;}
.slideshow-container {
    width: auto;
    height: 555px;
    position: relative;
}
.prev, .next {
	cursor: pointer;
	position: absolute;
	top: 42%;
	width: auto;
	padding: 16px;
	margin-top: -22px;
	color: #fbf8f8;
	font-weight: bold;
	font-size: 70px;
	transition: 0.6s ease;
	user-select: none;
	background-color: #717171;
}
.next {
  right: 0px;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: #e81414;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.play-button {width: max-content; position: relative; top: 130px; margin: auto; padding: 8px 16px; font-size: 14px; text-align: center; cursor: pointer; outline: none; color: #fff; background-color: #4CAF50; border: none; border-radius: 5px; box-shadow: 0 4px #999;}.click-count { color: aliceblue; font-size: 12px; font-weight: 600; position: absolute; top: 8px; left: 0px; background: #cc2323; padding: 4px 6px; border-radius: 0px 3px 3px 0px; opacity: 0.9; }
</style>
<!-- counter -->
<?php 
$clickcount = explode("\n", file_get_contents('counter.txt'));
foreach($clickcount as $line){
	$tmp = explode('||', $line);
	$count[trim($tmp[0])] = trim($tmp[1]);
	}
?>
<!-- end counter -->
<div id="thongbao" class="tabcontent">
<div class="slideshow-container">
<div class="mySlides fade">
 <h3>Thông Báo 1 / 2</h3>
  <a href="https://gta5vn.com/dang-ky" target="_blank"><img style="width: auto;height: 500px;" src="image/gta5-qc.png"></a>
	<p><a style="color:blueviolet;font-size: 20px;font-weight: 600;" href="https://gta5vn.com/dang-ky" target="_blank">Click Vào Đây Đăng Ký Tài Khoản Ngay</a>
</div>
<div class="mySlides fade">
  <h3>Thông Báo 2 / 2</h3>
  <h4>Game <a href="https://dotkich.goplay.vn/trang-chu" style="color:red;text-decoration: none;">Đột Kích</a> đã mở lại, người chơi phải tạo tài khoản mới hoặc có thể chuyển tài khoản cũ sang tài khoản mới.</h4>
  <a href="https://dotkich.goplay.vn/trang-chu"><img style="width: auto;height: 400px;" src="image/thongbao-cf.jpg"/></a>
  <br/>
  <b>
  <p>Đăng ký tài khoản mới: <a href="https://u.nu/dotkich" target="_blank">https://goplay.vn/oauth/Register</a></p>
  <p>Chuyển tài khoản cũ sang mới: <a href="https://dotkich.goplay.vn/chuyen-doi-tai-khoan" target="_blank">https://dotkich.goplay.vn/chuyen-doi-tai-khoan</a></p>
  </b>
  <p>Hướng dẫn Đăng ký tài khoản mới: <a href="image/hd-cf.png" target="_blank">Click vào đây.</a></p>
</div>
<a class="prev" onclick="clickli(); plusSlides(-1)">&#10094;</a>
<a class="next" onclick="clickli(); plusSlides(1)">&#10095;</a>
</div>
</div>

<div id="online" class="tabcontent">
<h3>Game Online</h3>
<center>
<div class="menu-content">
<ul class="content-ul">

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-gta5vn"><?php echo $count['click-gta5vn'];?></span></div>
<div onclick="document.getElementById('id01gta1').style.display='block'">
<span class="content-img"><img src="image/gta5vn.png" /></span>
<span class="content-name"><a class="content-name-a">GTA 5 Online VN</a></span>
</div>
<div id="id01gta1" class="modal">
	<span onclick="document.getElementById('id01gta1').style.display='none'" class="close" title="Close">×</span>
    <div id="id01gta1"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/gta5vn.lnk'; clickplay(); document.getElementById('id01gta1').style.display='none';">
			<div class="play-button" data-click-id="click-gta5vn">
				Mở GTA 5
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-garena"><?php echo $count['click-garena'];?></span></div>
<div onclick="document.getElementById('id01').style.display='block'">
<span class="content-img"><img src="image/garena.jpg" /></span>
<span class="content-name"><a class="content-name-a">Garena</a></span>
</div>
<div id="id01" class="modal">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">×</span>
    <div id="id01"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/garena.lnk'; clickplay(); document.getElementById('id01').style.display='none';">
			<div class="play-button" data-click-id="click-garena">
				Mở Garena
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-lmht"><?php echo $count['click-lmht'];?></span></div>
<div onclick="document.getElementById('online02').style.display='block'">
<span class="content-img"><img src="image/lmht.jpg" /></span>
<span class="content-name"><a class="content-name-a">Liên Minh Huyền Thoại</a></span>
</div>
<div id="online02" class="modal">
	<span onclick="document.getElementById('online02').style.display='none'" class="close" title="Close">×</span>
    <div id="online02"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/lmht.lnk'; clickplay(); document.getElementById('online02').style.display='none';">
			<div class="play-button" data-click-id="click-lmht">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-fo4"><?php echo $count['click-fo4'];?></span></div>
<div onclick="document.getElementById('online03').style.display='block'">
<span class="content-img"><img src="image/fo4.jpg" /></span>
<span class="content-name"><a class="content-name-a">Fifa Online 4</a></span>
</div>
<div id="online03" class="modal">
	<span onclick="document.getElementById('online03').style.display='none'" class="close" title="Close">×</span>
    <div id="online03"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/fo4.lnk'; clickplay(); document.getElementById('online03').style.display='none';">
			<div class="play-button" data-click-id="click-fo4">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-cf"><?php echo $count['click-cf'];?></span></div>
<div onclick="document.getElementById('online04').style.display='block'">
<span class="content-img"><img src="image/cf.jpg" /></span>
<span class="content-name"><a class="content-name-a">Đột Kích</a></span>
</div>
<div id="online04" class="modal">
	<span onclick="document.getElementById('online04').style.display='none'" class="close" title="Close">×</span>
    <div id="online04"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/cf.lnk'; clickplay(); document.getElementById('online04').style.display='none';">
			<div class="play-button" data-click-id="click-cf">

				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-freefire"><?php echo $count['click-freefire'];?></span></div>
<div onclick="document.getElementById('online05').style.display='block'">
<span class="content-img"><img src="image/freefire.jpg" /></span>
<span class="content-name"><a class="content-name-a">Free Fire</a></span>
</div>
<div id="online05" class="modal">
	<span onclick="document.getElementById('online05').style.display='none'" class="close" title="Close">×</span>
    <div id="online05"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/freefire.lnk'; clickplay(); document.getElementById('online05').style.display='none';">
			<div class="play-button" data-click-id="click-freefire">

				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-pubg-mobile"><?php echo $count['click-pubg-mobile'];?></span></div>
<div onclick="document.getElementById('online06').style.display='block'">
<span class="content-img"><img src="image/pubgmobile.jpg" /></span>
<span class="content-name"><a class="content-name-a">PUBG Mobile</a></span>
</div>
<div id="online06" class="modal">
	<span onclick="document.getElementById('online06').style.display='none'" class="close" title="Close">×</span>
    <div id="online06"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/pubg-mobile.lnk'; clickplay(); document.getElementById('online06').style.display='none';">
			<div class="play-button" data-click-id="click-pubg-mobile">

				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-cod-mobile"><?php echo $count['click-cod-mobile'];?></span></div>
<div onclick="document.getElementById('online07').style.display='block'">
<span class="content-img"><img src="image/codm.jpg" /></span>
<span class="content-name"><a class="content-name-a">Call Of Duty Mobile</a></span>
</div>
<div id="online07" class="modal">
	<span onclick="document.getElementById('online07').style.display='none'" class="close" title="Close">×</span>
    <div id="online07"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/cod-mobile.lnk'; clickplay(); document.getElementById('online07').style.display='none';">
			<div class="play-button" data-click-id="click-cod-mobile">

				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-rules"><?php echo $count['click-rules'];?></span></div>
<div onclick="document.getElementById('online010').style.display='block'">
<span class="content-img"><img src="image/ros.jpg" /></span>
<span class="content-name"><a class="content-name-a">Rules of Survival</a></span>
</div>
<div id="online010" class="modal">
	<span onclick="document.getElementById('online010').style.display='none'" class="close" title="Close">×</span>
    <div id="online010"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/rules.lnk'; clickplay(); document.getElementById('online010').style.display='none';">
			<div class="play-button" data-click-id="click-rules">

				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-csgo"><?php echo $count['click-csgo'];?></span></div>
<div onclick="document.getElementById('idcsgo').style.display='block'">
<span class="content-img"><img src="image/csgo.jpg" /></span>
<span class="content-name"><a class="content-name-a">CS Go</a></span>
</div>
<div id="idcsgo" class="modal">
	<span onclick="document.getElementById('idcsgo').style.display='none'" class="close" title="Close">×</span>
    <div id="idcsgo"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/steam.lnk'; clickplay(); document.getElementById('idcsgo').style.display='none';">
			<div class="play-button" data-click-id="click-csgo">

				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-steam"><?php echo $count['click-steam'];?></span></div>
<div onclick="document.getElementById('id010b').style.display='block'">
<span class="content-img"><img src="image/steam.jpg" /></span>
<span class="content-name"><a class="content-name-a">Steam</a></span>
</div>
<div id="id010b" class="modal">
	<span onclick="document.getElementById('id010b').style.display='none'" class="close" title="Close">×</span>
    <div id="id010b"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/steam.lnk'; clickplay(); document.getElementById('id010b').style.display='none';">
			<div class="play-button" data-click-id="click-steam">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-facebook"><?php echo $count['click-facebook'];?></span></div>
<div onclick="document.getElementById('idfacebook').style.display='block'">
<span class="content-img"><img src="image/fb.png" /></span>
<span class="content-name"><a class="content-name-a">Facebook</a></span>
</div>
<div id="idfacebook" class="modal">
	<span onclick="document.getElementById('idfacebook').style.display='none'" class="close" title="Close">×</span>
    <div id="idfacebook"class="container">
      <div class="clearfix">
		<a onclick="window.open('https://facebook.com', '_blank'); clickplay(); document.getElementById('idfacebook').style.display='none';">
			<div class="play-button" data-click-id="click-facebook">
				Mở Facebook
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-youtube"><?php echo $count['click-youtube'];?></span></div>
<div onclick="document.getElementById('id015').style.display='block'">
<span class="content-img"><img src="image/yt.jpg" /></span>
<span class="content-name"><a class="content-name-a">Youtube</a></span>
</div>
<div id="id015" class="modal">
	<span onclick="document.getElementById('id015').style.display='none'" class="close" title="Close">×</span>
    <div id="id015"class="container">
      <div class="clearfix">
		<a onclick="window.open('https://youtube.com', '_blank'); clickplay(); document.getElementById('id015').style.display='none';">
			<div class="play-button" data-click-id="click-youtube">
				Mở Youtube
			</div>
		</a>
      </div>
    </div>
</div>
</li>

</ul>
</div>
</center>
</div>

<div id="offline" class="tabcontent">
<h3>Game Offline</h3>

<center>
<div class="menu-content">
<ul class="content-ul">

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-mafia3"><?php echo $count['click-mafia3'];?></span></div>
<div onclick="document.getElementById('idmafia3').style.display='block'">
<span class="content-img"><img src="image/mafia3.png" /></span>
<span class="content-name"><a class="content-name-a">Mafia 3</a></span>
</div>
<div id="idmafia3" class="modal">
	<span onclick="document.getElementById('idmafia3').style.display='none'" class="close" title="Close">×</span>
    <div id="idmafia3"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/mafia3.lnk'; clickplay(); document.getElementById('idmafia3').style.display='none';">
			<div class="play-button" data-click-id="click-mafia3">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-gta5"><?php echo $count['click-gta5'];?></span></div>
<div onclick="document.getElementById('offline08').style.display='block'">
<span class="content-img"><img src="image/gta5.png" /></span>
<span class="content-name"><a class="content-name-a">GTA 5</a></span>
</div>
<div id="offline08" class="modal">
	<span onclick="document.getElementById('offline08').style.display='none'" class="close" title="Close">×</span>
    <div id="offline08"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/gta5.lnk'; clickplay(); document.getElementById('offline08').style.display='none';">
			<div class="play-button" data-click-id="click-gta5">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-minecraft"><?php echo $count['click-minecraft'];?></span></div>
<div onclick="document.getElementById('offline09').style.display='block'">
<span class="content-img"><img src="image/minecraft.png" /></span>
<span class="content-name"><a class="content-name-a">Minecraft</a></span>
</div>
<div id="offline09" class="modal">
	<span onclick="document.getElementById('offline09').style.display='none'" class="close" title="Close">×</span>
    <div id="offline09"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/minecraft.lnk'; clickplay(); document.getElementById('offline09').style.display='none';">
			<div class="play-button" data-click-id="click-minecraft">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

</ul>
</div>
</center>

</div>

<div id="mobile" class="tabcontent">
<h3>Game Mobile</h3>

<center>
<div class="menu-content">
<ul class="content-ul">
<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-freefire"><?php echo $count['click-freefire'];?></span></div>
<div onclick="document.getElementById('mobile05').style.display='block'">
<span class="content-img"><img src="image/freefire.jpg" /></span>
<span class="content-name"><a class="content-name-a">Free Fire</a></span>
</div>
<div id="mobile05" class="modal">
	<span onclick="document.getElementById('mobile05').style.display='none'" class="close" title="Close">×</span>
    <div id="mobile05"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/freefire.lnk'; clickplay(); document.getElementById('mobile05').style.display='none';">
			<div class="play-button" data-click-id="click-freefire">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-pubg-mobile"><?php echo $count['click-pubg-mobile'];?></span></div>
<div onclick="document.getElementById('mobile06').style.display='block'">
<span class="content-img"><img src="image/pubgmobile.jpg" /></span>
<span class="content-name"><a class="content-name-a">PUBG Mobile</a></span>
</div>
<div id="mobile06" class="modal">
	<span onclick="document.getElementById('mobile06').style.display='none'" class="close" title="Close">×</span>
    <div id="mobile06"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/pubg-mobile.lnk'; clickplay(); document.getElementById('mobile06').style.display='none';">
			<div class="play-button" data-click-id="click-pubg-mobile">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt chơi: <span id="click-cod-mobile"><?php echo $count['click-cod-mobile'];?></span></div>
<div onclick="document.getElementById('mobile07').style.display='block'">
<span class="content-img"><img src="image/codm.jpg" /></span>
<span class="content-name"><a class="content-name-a">Call Of Duty Mobile</a></span>
</div>
<div id="mobile07" class="modal">
	<span onclick="document.getElementById('mobile07').style.display='none'" class="close" title="Close">×</span>
    <div id="mobile07"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/cod-mobile.lnk'; clickplay(); document.getElementById('mobile07').style.display='none';">
			<div class="play-button" data-click-id="click-cod-mobile">
				Vào Game
			</div>
		</a>
      </div>
    </div>
</div>
</li>

</ul>
</div>
</center>

</div>

<div id="phanmem" class="tabcontent">
<h3>Phần Mềm</h3>

<center>
<div class="menu-content">
<ul class="content-ul">

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-unikey"><?php echo $count['click-unikey'];?></span></div>
<div onclick="document.getElementById('soft011').style.display='block'">
<span class="content-img"><img src="image/unikey.png" /></span>
<span class="content-name"><a class="content-name-a">Unikey</a></span>
</div>
<div id="soft011" class="modal">
	<span onclick="document.getElementById('soft011').style.display='none'" class="close" title="Close">×</span>
    <div id="soft011"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/unikey.lnk'; clickplay(); document.getElementById('soft011').style.display='none';">
			<div class="play-button" data-click-id="click-unikey">
				Mở Unikey
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-chrome"><?php echo $count['click-chrome'];?></span></div>
<div onclick="document.getElementById('soft012').style.display='block'">
<span class="content-img"><img src="image/chrome.png" /></span>
<span class="content-name"><a class="content-name-a">Google Chrome</a></span>
</div>
<div id="soft012" class="modal">
	<span onclick="document.getElementById('soft012').style.display='none'" class="close" title="Close">×</span>
    <div id="soft012"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/chrome.lnk'; clickplay(); document.getElementById('soft012').style.display='none';">
			<div class="play-button" data-click-id="click-chrome">
				Mở Chrome
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-coccoc"><?php echo $count['click-coccoc'];?></span></div>
<div onclick="document.getElementById('soft013').style.display='block'">
<span class="content-img"><img src="image/coccoc.png" /></span>
<span class="content-name"><a class="content-name-a">CócCóc</a></span>
</div>
<div id="soft013" class="modal">
	<span onclick="document.getElementById('soft013').style.display='none'" class="close" title="Close">×</span>
    <div id="soft013"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/coccoc.lnk'; clickplay(); document.getElementById('soft013').style.display='none';">
			<div class="play-button" data-click-id="click-coccoc">
				Mở CócCóc
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-firefox"><?php echo $count['click-firefox'];?></span></div>
<div onclick="document.getElementById('idfirefox').style.display='block'">
<span class="content-img"><img src="image/firefox.jpg" /></span>
<span class="content-name"><a class="content-name-a">Firefox</a></span>
</div>
<div id="idfirefox" class="modal">
	<span onclick="document.getElementById('idfirefox').style.display='none'" class="close" title="Close">×</span>
    <div id="idfirefox"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/firefox.lnk'; clickplay(); document.getElementById('idfirefox').style.display='none';">
			<div class="play-button" data-click-id="click-firefox">
				Mở Firefox
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-word"><?php echo $count['click-word'];?></span></div>
<div onclick="document.getElementById('soft014').style.display='block'">
<span class="content-img"><img src="image/word.png" /></span>
<span class="content-name"><a class="content-name-a">MS Word</a></span>
</div>
<div id="soft014" class="modal">
	<span onclick="document.getElementById('soft014').style.display='none'" class="close" title="Close">×</span>
    <div id="soft014"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/word.lnk'; clickplay(); document.getElementById('soft014').style.display='none';">
			<div class="play-button" data-click-id="click-word">
				Mở Word
			</div>
		</a>
      </div>
    </div>
</div>
</li>

<li class="conetent-li" onmouseenter="lihover()" onclick="clickli()">
<div class="click-count">Lượt mở: <span id="click-excel"><?php echo $count['click-excel'];?></span></div>
<div onclick="document.getElementById('soft015').style.display='block'">
<span class="content-img"><img src="image/excel.png" /></span>
<span class="content-name"><a class="content-name-a">MS Excel</a></span>
</div>
<div id="soft015" class="modal">
	<span onclick="document.getElementById('soft015').style.display='none'" class="close" title="Close">×</span>
    <div id="soft015"class="container">
      <div class="clearfix">
		<a onclick="location.href='webrun:D:/nethuy/Shortcut/excel.lnk'; clickplay(); document.getElementById('soft015').style.display='none';">
			<div class="play-button" data-click-id="click-excel">
				Mở Excel
			</div>
		</a>
      </div>
    </div>
</div>
</li>

</ul>
</div>
 </center>
</div>

<div id="khoacc" class="tabcontent">
<h3>Kho Acc Free</h3>
<center>
<div class="menu-content">
<div style="width: auto;height: 520px;overflow: overlay;">
<table class="acc">
  <tr>
    <th colspan="2"><center>GTA 5 Online</center></th>
  </tr>
  <tr>
    <td>Tên Đăng Nhập</td>
    <td>Mật Khẩu</td>
  </tr>
  <tr>
    <td>nethuy01</td>
    <td>nethuy123456</td>
  </tr>
   <tr>
    <td>nethuy02</td>
    <td>nethuy123456</td>
  </tr>
  <tr>
    <td>nethuy03</td>
    <td>nethuy123456</td>
  </tr>
   <tr>
    <td>nethuy04</td>
    <td>nethuy123456</td>
  </tr>
  <tr>
    <td>nethuy05</td>
    <td>nethuy123456</td>
  </tr>
</table>
<br/>
<table class="acc">
  <tr>
    <th colspan="2"><center>Đột Kích</center></th>
  </tr>
  <tr>
    <td>Tên Đăng Nhập</td>
    <td>Mật Khẩu</td>
  </tr>
  <tr>
    <td>nethuy01</td>
    <td>nethuy123456</td>
  </tr>
    <tr>
    <td>nethuy02</td>
    <td>nethuy123456</td>
  </tr>
    <tr>
    <td>nethuy03</td>
    <td>nethuy123456</td>
  </tr>
   <tr>
    <td>nethuy04</td>
    <td>nethuy123456</td>
  </tr>
  <tr>
    <td>nethuy05</td>
    <td>nethuy123456</td>
  </tr>
</table>
<br/>
<table class="acc">
  <tr>
    <th colspan="2"><center>Garena, Fifa Online 4, LMHT</center></th>
  </tr>
  <tr>
    <td>Tên Đăng Nhập</td>
    <td>Mật Khẩu</td>
  </tr>
  <tr>
    <td>nethuy-01</td>
    <td>nethuy123456</td>
  </tr>
    <tr>
    <td>nethuy-02</td>
    <td>nethuy123456</td>
  </tr>
    <tr>
    <td>nethuy-03</td>
    <td>nethuy123456</td>
  </tr>
	<tr>
    <td>nethuy-04</td>
    <td>nethuy123456</td>
  </tr>
  <tr>
    <td>nethuy-05</td>
    <td>nethuy123456</td>
  </tr>
</table>
<br/>
<table class="acc">
  <tr>
    <th colspan="2"><center>Steam</center></th>
  </tr>
  <tr>
    <td>Tên Đăng Nhập</td>
    <td>Mật Khẩu</td>
  </tr>
  <tr>
    <td>nethuy01</td>
    <td>nethuy123456</td>
  </tr>
    <tr>
    <td>nethuy02</td>
    <td>nethuy123456</td>
  </tr>
    <tr>
    <td>nethuy03</td>
    <td>nethuy123456</td>
  </tr>
     <tr>
    <td>nethuy04</td>
    <td>nethuy123456</td>
  </tr>
  <tr>
    <td>nethuy05</td>
    <td>nethuy123456</td>
  </tr>
</table>
</div>
</div>
<a style="color: red; font-size: 14px; font-weight: bold; font-style: italic;line-height: 3.6;">Lưu ý: Acc xài chung không nên đổi mật khẩu!</a>
</center>
</div>

<div id="dichvu" class="tabcontent">
<style>.acc {position: relative;left: -5px;}.acc td {width: 50%;} table {font-family: arial, sans-serif;   border-collapse: collapse;   width: 80%;   background: #ccc; }  td, th {   border: 1px solid #969494;   text-align: left;   padding: 8px; }  tr:nth-child(even) {   background-color: #dddddd; }</style>
<center style="position: relative;top: 30px;">
<h3>Bảng Giá Dịch Vụ</h3>
<table>
  <tr>
    <th>Tên</th>
    <th>Giá</th>
    <th>Đơn Vị</th>
  </tr>
  <tr>
    <td>Rồng Đỏ</td>
    <td>4.000 đ</td>
    <td>1 Ly</td>
  </tr>
    <tr>
    <td>Rồng Đỏ + Tẩy Đá</td>
    <td>5.000 đ</td>
    <td>1 Ly + Tẩy Đá</td>
  </tr>
  <tr>
    <td>Sting</td>
    <td>10.000 đ</td>
    <td>1 Chai</td>
  </tr>
  <tr>
    <td>Sting + Tẩy Đá</td>
    <td>12.000 đ</td>
    <td>1 Chai + Tẩy Đá</td>
  </tr>
  <tr>
    <td>Tẩy Đá</td>
    <td>2.000 đ</td>
    <td>1 Ly</td>
  </tr>
  <tr>
    <td>Nước Suối</td>
    <td>3.000 đ</td>
    <td>1 Chai</td>
  </tr>
  <tr>
    <td>Bánh Các Loại</td>
    <td>2.000 đ</td>
    <td>Bịt</td>
  </tr>
  <tr>
    <td>Xúc Xích</td>
    <td>3.000 đ</td>
    <td>1 Cây</td>
  </tr>
    <tr>
    <td>San-wít</td>
    <td>3.000 đ</td>
    <td>1 Bịt</td>
  </tr>
  <tr>
    <td>Mì Trứng</td>
    <td>10.000 đ</td>
    <td>1 Tô</td>
  </tr>
  <tr>
    <td>Mì Không Trứng</td>
    <td>7.000 đ</td>
    <td>1 Tô</td>
  </tr>
   <tr>
    <td>Thuốc Hút</td>
    <td>1.500 đ</td>
    <td>1 Điếu</td>
  </tr>
</table>
</center>
</div>

<div id="ver" class="tabcontent">
<div class="ver-content">
  <h2>Thông Tin Phần Mềm</h2>
  <p>Phiên Bản 1.1 - 2020</p>
  <p>Được phát triển bởi Net Huy - (A. Xuân)</p>
  <p>Đc: Sơn Định, Chợ Lách - Bến Tre</p>
  <br/>
  <a>--------------------------</a>
  <span style="">
  <h2>Changelog</h2>
  <h3>Version 1.1</h3>
  <p>Xóa menu "Chơi Nhiều."</p>
  <p>Thêm menu "Kho Acc Free."</p>
  <p>Thêm tính năng đếm lượt chơi, mở ứng dụng.</p>
  <a>***</a>
  <h3>Version 1.0</h3>
  <p>Phiên bản đầu tiên.</p>
  </span>
  </div>
</div>


</div><!-- End content -->
</div><!-- End right -->

</div><!-- End menu -->
</div><!-- End loader-content -->
</div><!-- End animate-bottom --> 
  


<script>
var myVar;
function myFunction() {
  myVar = setTimeout(showPage, 10);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
<!-- end loader -->

var width = 1296;
var height = 762;
window.moveTo((screen.availWidth/2)-(width/2),(screen.availHeight/2)-(height/2))
window.resizeTo(width,height);
window.onresize = function() {window.resizeTo(width,height); }
<!-- end resize windows -->

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
<!-- end tab menu -->

</script>

<!-- Hover Audio -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<audio><source src="audio/menuhover.mp3" /></audio>
<script>
function playclip(){
     var audio = document.getElementsByTagName("audio")[0];
              audio.play();
            }
 $(document).ready(function() {
        $('.button').on('mouseenter',function(){
        if(!$(this).hasClass('.played')){
        playclip();
        $(this).addClass('.played');
        }
        });
$('.button').on('mouseleave',function(){
    if($(this).hasClass('.played')){
    $(this).removeClass('.played');
    }
    });
    });
</script>
<!-- End Hover Audio -->

<!-- Audio Click -->
<audio id="audioID"><source src="audio/click.mp3" type="audio/mpeg"></audio>
<script>
var audio1 = document.getElementById("audioID");
function playAudio() {
  audio1.play();
}
</script>
<!-- End Audio Click -->

<!-- Slide -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
<!-- End Slide -->
</script>

<script>
<!-- Couter -->
var clicks = document.querySelectorAll('.play-button'); // IE8
for(var i = 0; i < clicks.length; i++){
	clicks[i].onclick = function(){
		var id = this.getAttribute('data-click-id');
		var post = 'id='+id; // post string
		var req = new XMLHttpRequest();
		req.open('POST', 'counter.php', true);
		req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		req.onreadystatechange = function(){
			if (req.readyState != 4 || req.status != 200) return; 
			document.getElementById(id).innerHTML = req.responseText;
			};
		req.send(post);
		}
	}
<!-- End counter -->
</script>

<audio id="audioID1">
  <source src="audio/menuclick.mp3" type="audio/mpeg">
</audio>
<audio id="audioID2">
  <source src="audio/lihover.mp3" type="audio/mpeg">
</audio>
<audio id="audioID3">
  <source src="audio/clickplay.mp3" type="audio/mpeg">
</audio>
<audio id="audioID4">
  <source src="audio/clickli.mp3" type="audio/mpeg">
</audio>
<script>
//Defining variable based on unique ID
var audio1 = document.getElementById("audioID1");
var audio2 = document.getElementById("audioID2");
var audio3 = document.getElementById("audioID3");
var audio4 = document.getElementById("audioID4");
//Example of an HTML Audio/Video Method
function menuclick() {
  audio1.play();
}
function lihover() {
  audio2.play();
}
function clickplay() {
  audio3.play();
}
function clickli() {
  audio4.play();
}
</script>
<script type='text/javascript' src='phaohoa.js'></script>
</body>
</html>
