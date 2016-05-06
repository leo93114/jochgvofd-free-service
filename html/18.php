<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<span style="font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;">
<html>
<head>
<title>次是慶宇HTML語法整理</title>
<link rel=stylesheet type="text/css" href="image/joch.css">
</head>
<body>
<p>
	<td><?php require_once('./image/header.php'); ?></td></p><div style="text-align: center;">
<a href="index.php"><img src="image/logo.png"></a>
</div>
<h1>跑馬燈</h1>
<fieldset>
<div>
	若您覺得網頁太單調，</div>
<div>
	想要加上變化的話，</div>
<div>
	跑馬燈是不可少的．</div>
<div>
	只要加上&lt;marquee&gt;即可。</div>
<div>
	&lt;marquee&gt;跑馬燈&lt;/marquee&gt;</div>
<div>
	也可以用HTML語法跟著跑。</div>
<div>
	以下語法展示</div>
<div>
	<marquee>跑馬燈</marquee></div>
<div>
	&lt;marquee&gt;屬性</div>
<div>
	<div>
		<span style="color:#ff0099;">bgcolor</span>=&quot;#9900ff&quot;這裡加上背景顏色，顏色可以自己改喔</div>
	<div>
		<span style="color:#ff0099;">direction</span>=這是空控制行進的方巷喔right／up／down</div>
	<div>
		<span style="color:#ff0099;">scrollamount</span>=這是空控制行進的步伐喔</div>
	<div>
		<span style="color:#ff0099;">behavior</span>=這是空控制行進的方式喔：</div>
	<div>
		slide文字碰到底邊就會停止／alternate左右碰撞</div>
	<div>
		<span style="color:#ff0099;">width</span>=加上這可以設定行進的寬度</div>
	<div>
		<span style="color:#ff0099;">height</span>=加上這可以設定行進的高度</div>
	<h3>
		滑鼠移入跑馬燈會停止跑</h3>
	<p>
		&lt;marquee&gt;屬性加上onMouseOver=&quot;this.stop()&quot; onMouseOut=&quot;this.start()&quot;</p>
	<p>
		例如</p>
	<p>
		&lt;marquee <span style="color:#ff0099;">onMouseOver=&quot;this.stop()&quot; onMouseOut=&quot;this.start()&quot;</span>&gt;滑鼠移入跑馬燈會停止跑&lt;/marquee&gt;</p>
	<p>
		以下語法展示</p>
	<p>
		<marquee onMouseOver="this.stop()" onMouseOut="this.start()">滑鼠移入跑馬燈會停止跑</marquee></p>
</div>
</fieldset>
<a href="17.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:音樂語法</a> <a href="19.php" class="myButton">下一篇:特殊字元與符號特輯 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>