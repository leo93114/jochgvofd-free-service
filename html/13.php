<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<span style="font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;">
<html>
<head>
<title>次是慶宇HTML語法整理</title>
<style>
<link rel=stylesheet type="text/css" href="image/joch.css">
</style>
</head>
<body>
<p>
	<td><?php require_once('./image/header.php'); ?></td> <a href="#demo" class="myButton">效果展示</a></p><div style="text-align: center;">
<a href="index.php"><img src="image/logo.png"></a>
</div>
<h1>文件內的連結</h1>
<fieldset>
<div>
	看到上方的最上面的效果展示按鈕按下去是不是會跳到網頁內的某個地方，一共有兩個步驟 :</div>
<div>
	1.給目標地一個名稱，而這個名稱是在按下連結時會到的地方 :</div>
<div>
	<span style="color:#cc00cc;">&lt;a name=&quot;目標名稱&quot;&gt;</span>目標地點<span style="color:#cc00cc;">&lt;/a&gt;</span></div>
<div>
	2.插入一個連結，而這個連結是當你按下這個連結時便會到目標地點 :</div>
<div>
	<span style="color:#cc00cc;">&lt;a href=&quot;#目標名稱&quot;&gt;</span>跳到目標地點<span style="color:#cc00cc;">&lt;/a&gt;</span></div>
<div>
	在連結的標籤內，必須加上#在目標名稱前</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a name="demo" class="myButton">跳到這裡</a>
</fieldset>
<a href="12.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:插入超連結</a> <a href="14.php" class="myButton">下一篇:插入圖片 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>