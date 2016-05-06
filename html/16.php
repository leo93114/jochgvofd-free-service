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
<h1>分割視窗</h1>
<fieldset>
<div>
	其實你現在看到的畫面已經有運用分割視窗的碼了</div>
<div>
	首先要加入</div>
<div>
	&lt;<span style="color:#cc00cc;">frameset</span> cols=<span style="color:#9900ff;">數字或比例,數字或比例</span>&gt;(左右分割畫面)或</div>
<div>
	&lt;<span style="color:#cc00cc;">frameset</span> rows=<span style="color:#9900ff;">數字或比例,數字或比例</span>&gt;(上下分割畫面)</div>
<div>
	也可以寫成這樣 :</div>
<div>
	&lt;frameset cols=<span style="color:#cc00cc;">120,*</span>&gt;</div>
<div>
	用*的意思是左邊的頁面長度為120，而剩餘的空間都給右方的頁面使用</div>
<div>
	在&lt;frameset&gt;之後便要加上<span style="color:#cc00cc;">&lt;frame&gt;</span>的碼，如果左邊頁面的顯示檔案為<span style="color:#9900ff;">left.htm</span>， 而右邊的頁面顯示的檔案為<span style="color:#9900ff;">right.htm</span>，如下所示 :</div>
<div>
	&lt;frameset cols=120,*&gt;</div>
<div>
	&lt;<span style="color:#cc00cc;">frame</span> src=&quot;<span style="color:#9900ff;">left.htm</span>&quot;&gt;</div>
<div>
	&lt;<span style="color:#cc00cc;">frame</span> src=&quot;<span style="color:#9900ff;">right.htm</span>&quot;&gt;</div>
<div>
	&lt;/frameset&gt;</div>
<div>
	在&lt;frameset&gt;內的控制屬性如下 :</div>
<div>
	<span style="color:#cc00cc;">framespacing</span>=控制兩個frame之間的距離</div>
<div>
</fieldset>
<a href="15.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:表格設定</a> <a href="17.php" class="myButton">下一篇:音樂語法 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>