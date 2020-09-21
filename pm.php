<?
session_start();

if(isset($_GET['logout'])){	
	
	//Simple exit message
	$fp = fopen("pm-log.html", 'a');
	fwrite($fp, "<div class='msgln'><i><b>". $_SESSION['name'] ."</b> vừa rời chat.</i><br></div>");
	fclose($fp);
	
	session_destroy();
	header("Location: pm.php"); //Redirect the user
}

function loginForm(){
	echo'
	<div id="loginform">
	<form action="pm.php" method="post">
		<p>Điền tên rồi nhấn Enter để vào chat.</p>
		<label for="name">Tên:</label>
		<input style="width: 110px;" type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Enter" />
		</br></br>
		<p style="font-size:12px;"><i>- Báo máy hư, chuột, phím, tai nghe hư vui lòng vào Room Chat để báo.</i></p>
		<p style="font-size:12px;"><i>- Game lỗi không chơi được vui lòng vào Room Chat để hỏi.</i></p>
		<p style="font-size:12px;"><i>- Để vào Room Chat, điền tên vào khung <b>Tên</b> rồi nhấn <b>Enter</b> để vào chát.</i></p>
	</form>
	</div>
	';
}

if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Please type in a name</span>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<style>
body {
	font-family: sans-serif;
	margin: 0;
    border: 0; }
form, p, span {
	margin:0;
	padding:0; }
 
input { font:12px arial; }
 
a {
	color:#0000FF;
	text-decoration:none; }
 
	a:hover { text-decoration:underline; }
 
#wrapper{
    margin: 0;
    border-right: 1px solid rgb(170, 170, 170);
    border-left: 1px solid rgb(170, 170, 170);
    padding-bottom: 5px;
    background: #EBF4FB;
    width: 254px;
    height: 221px;
	overflow: hidden;
}
 
#loginform { 
	padding-top: 18px;
    font-size: 14px;
    margin: 0 17px;

}
 
	#loginform p { margin: 5px 0; }
 
#chatbox {
    font-size: 14px;
    text-align: left;
    margin: 0 auto;
    padding: 10px;
    background: #fff;
    height: 120px;
    width: 230px;
    border: 1px solid rgb(170, 170, 170);
    overflow: overlay;
}
 
#usermsg {
    width: 179px;
    height: 20px;
    border: 1px solid rgb(74, 74, 74);
}
 
#submit { width: 60px; }
 
.error { color: #ff0000; }
 
#menu { padding:10px; }
 
.welcome { float:left; }
 
.logout { float:right; }
 
.msgln { margin:0 0 2px 0; }
.sendx {padding:10px;}
</style>
</head>

<?php
if(!isset($_SESSION['name'])){
	loginForm();
}
else{
?>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Chào, <b><?php echo $_SESSION['name']; ?></b></p>
		<p class="logout"><a href="pm.php?logout=true">Thoát Chat</a></p>
		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"><?php
	if(file_exists("pm-log.html") && filesize("pm-log.html") > 0){
		$handle = fopen("pm-log.html", "r");
		$contents = fread($handle, filesize("pm-log.html"));
		fclose($handle);
		
		echo $contents;
	}
	?></div>
	
	<form class="sendx" name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
	</form>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("pm-post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "pm-log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	setInterval (loadLog, 2000);	//Reload file every 2.5 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Bạn muốn thoát chat?");
		if(exit==true){window.location = 'pm.php?logout=true';}		
	});
});
</script>
<?php
}
?>
</body>
</html>