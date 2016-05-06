<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<span style="font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;">
<html>
<head>
<link rel="shortcut icon" href="image/favicon.ico">
<title>次是慶宇IP查詢</title>
<style>
*:link, *:visited, *:hover, *:active, *:focus , * {
-o-transition: color .20s linear, background-color .20s linear, border-color .20s linear;
-webkit-transition: color .20s linear, background-color .20s linear, border-color .20s linear;
-moz-transition: color .20s linear, background-color .20s linear, border-color .20s linear;
transition: color .20s linear, background-color .20s linear, border-color .20s linear;
}
a:link {color:#9900ff;}
a:visited {color:#9900ff;}
a:hover {color:#ff0099;}
::selection {
background: #9900ff;
color: #fff;
}
::-moz-selection {
background: #9900ff;
color: #fff;
}
img::selection {
background: transparent;
}
img::-moz-selection {
background: transparent;
}
#Img3{
    opacity: 1.0; //設為完全不透明
    filter: alpha(opacity=100); // IE8 與更早的版本
}
#Img3:hover{
    opacity: 0.5; //透明度設為 0.5
    filter: alpha(opacity=50); // IE8 與更早的版本
}
.myButton {
	background-color:#b76fff;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #9900ff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;
	font-size:19px;
	padding:12px 37px;
	text-decoration:none;
}
.myButton:hover {
	background-color:#ff80d0;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
</head>
<body>
<p><a href="http://jochgvofd.com/free" class="myButton"><img src="image/Back.gif" width="20" height="20"> 返回免費服務</a> </p>
<div style="text-align: center;">
<h1><b><font color="#9900ff">次是慶宇</font>IP查詢</b></h1>
<font size=5 color="#9900ff">你的IP是
<?php
function GetIP(){
 if(!empty($_SERVER["HTTP_CLIENT_IP"])){
  $cip = $_SERVER["HTTP_CLIENT_IP"];
 }
 elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
  $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
 }
 elseif(!empty($_SERVER["REMOTE_ADDR"])){
  $cip = $_SERVER["REMOTE_ADDR"];
 }
 else{
  $cip = "無法獲取！";
 }
 return $cip;
}
echo GetIP();
?></font><br />
<a href="https://free.jochgvofd.com/ip/" class="myButton">重新整理</a>
<font size=5 color="#9900ff">
<font size=5 color="#9900ff"><marquee direction="up" behavior="slide" bgcolor="#b76fff">
<div style="text-align: center;"><br />聯絡我們<br /><a href="mailto:jochgvofd@gmail.com"> <img src="image/taddyshen.png" /><br /><a href="https://line.me/ti/p/%40trr7250q"><img height="36" border="0" alt="好友人數" src="https://biz.line.naver.jp/line_business/img/btn/addfriends_zh-Hant.png" /></a><br /><a href="https://www.facebook.com/jochgvofdweb">Facebook粉絲團<a><br />
© 2012-2016 <a href="http://jochgvofd.com/" target="_blank">次是慶宇工作室</a> - © 2012-2016 <a href="http://wartw.com.tw" target="_blank">風雨人多元工作室</a>合作</a></a></a></div>

</marquee></font>
</body>
</html>
</span>