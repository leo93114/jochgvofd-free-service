<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<span style="font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;">
<html>
<head>
<title>次是慶宇HTML語法整理</title>
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
#Img3{-selection {background- transparent
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
<p>
	<td><?php require_once('./image/header.php'); ?></td></p><div style="text-align: center;">
<a href="index.php"><img src="image/logo.png"></a>
</div>
<h1>網頁顏色設定</h1>
<fieldset>
從範例中可以看到，我們在&lt;body&gt; 標籤裡面直接設定 bgcolor 並給灰色（#cccccc）與橘色（orange），除此之外也可以使用 RGB 的色碼來呈現你的背景顏色。附帶一提 bgcolor 除了用在 &lt;body&gt; 標籤中。<br />
	&lt;body <font color="#cc00cc">bgcolor</font>=&quot;#<font color="#9900ff">xxxxxx</font>&quot; <font color="#cc00cc">text</font>=&quot;#<font color="#9900ff">xxxxxx</font>&quot;  <font color="#cc00cc">link</font>=&quot;#<font color="#9900ff">xxxxxx</font>&quot; <font color="#cc00cc">vlink</font>=&quot;#<font color="#9900ff">xxxxxx</font>&quot;  <font color="#cc00cc">alink</font>=&quot;#<font color="#9900ff">xxxxxx</font>&quot;&gt;<br />
<font color="#cc00cc">bgcolor</font>=控制背景顏色<br />
<font color="#cc00cc">text</font>=控制文字顏色<br />
<font color="#cc00cc">ink</font>=</font>控制連結顏色<br />
<font color="#cc00cc">vlink</font>=控制已閱讀過的顏色<br />
<font color="#cc00cc">alink</font>=控制正在連結的顏色<br />
而xxxxxx六個數值代表紅／綠／籃的顏色元素值，<br />為A～F及0～9等所組合起來的六個數值， <br />配色的功力就得看您自己嚕，右邊有我所製做的調色區有16的6次方種顏色供您參考 :<br />
另外在xxxxxx的部份也可用顏色的英文單字代替，<br />但xxxxxx之前的#要去掉，<br />如text="#000000"可換成 text="BLACK"
</fieldset>
<a href="3.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:解決網頁亂碼</a> <a href="5.php" class="myButton">下一篇:加入背景圖像 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>