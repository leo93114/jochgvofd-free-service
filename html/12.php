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
<h1>插入超連結</h1>
<fieldset>
<h3>
	文字之超連結</h3>
<p>
	<span style="font-size: 12px;">連結為一個網頁不可少的東西，沒有連結就那都不能去，如要差入一個連結便要加入<span style="color:#cc00cc;">&lt;a href=&quot;URL&quot;&gt;</span>的碼 :</span></p>
<p>
	按下下面的連結會連到次是慶宇工作室</p>
<div>
	<a href="http://jochgvofd.gq">次是慶宇工作室</a></div>
<div>
	記得要加上<span style="color:#9900ff;">&lt;/a&gt;</span>的關閉碼唷，不然瀏覽器會把<span style="color:#cc00cc;">&lt;a href=&quot;http://jochgvofd.gq&quot;&gt;</span>之後的東西都連到次是慶宇工作室</div>
<div>
	URL就是所要連結的網址</div>
<div>
	如果是要連結在同一系統內的檔案，則將URL改成相對的路徑即可</div>
<div>
	連結到同一目錄內的檔案</div>
<div>
	<span style="color:#cc00cc;">&lt;a href=&quot;index.htm&quot;&gt;</span>回首頁<span style="color:#9900ff;">&lt;/a&gt;</span></div>
<div>
	連結在子目錄的檔案</div>
<div>
	<span style="color:#cc00cc;">&lt;a href=&quot;a/1.htm&quot;&gt;</span>連到a目錄裡的1.htm<span style="color:#9900ff;">&lt;/a&gt;</span></div>
<h3>
	FTP的連結方式</h3>
<div>
	<span style="color:#cc00cc;">&lt;a href=&quot;ftp://ftp.</span><span style="color: rgb(204, 0, 204);">joch.gq</span><span style="color:#cc00cc;">&quot;&gt;&nbsp;</span>次是慶宇
</div>
<div>
	當然也可以加上目錄名稱，甚至檔案名稱。</div>
<div>
	<span style="color:#cc00cc;">&lt;a href=&quot;ftp://ftp.joch.gq/free/111.zip&quot;&gt;</span></div>
<div>
	如此一來按一下就可以下載FTP的檔案</div>
<h3>
	E-MAIL</h3>
<div style="text-align: center;">
	範例如下:</div>
<div style="text-align: center;">
	範例1:文字連結</div>
<div style="text-align: center;">
	&lt;a href=&quot;mailto:jochgvofdem@gmail.com&quot;&gt;站長的信箱</div>
<div style="text-align: center;">
	<a href="mailto:jochgvofdem@gmail.com">站長的信箱</a></div>
<div>
	而在<span style="color:#cc00cc;">&lt;a href=&quot;URL&quot;&gt;</span>的標籤中，可插入<span style="color:#9900ff;">target</span>=&quot;<span style="color:#9999ff;">_new</span>／<span style="color:#9999ff;">_top</span>／<span style="color:#9999ff;">_blank</span>／<span style="color:#9999ff;">name</span>&quot;</div>
<div>
	來改變連結所開啟頁面的狀態!!</div>
<div>
	在<span style="color:#9900ff;">target</span>裡的參數如下 :</div>
<div>
	<span style="color:#cc00cc;">_new</span>=在一個新視窗開啟，不過只會一直在同一個新視窗開啟，不會另外在開一個新視窗</div>
<div>
	<span style="color:#cc00cc;">_top</span>=在同一個視窗出現，不過是整個大視窗，而不是所分割後的視窗</div>
<div>
	<span style="color:#cc00cc;">_blank</span>=跟_new差不多，只是會一直出現新的視窗，而不會在同一個新視窗開啟 =&#39;&#39;</div>
<div>
	<span style="color:#cc00cc;">name=</span>在frame有介紹，是給frame的name</div>
<div>
	而在<span style="color:#cc00cc;">&lt;a href=&quot;URL&quot;&gt;</span>的標籤中，可插入<span style="color:#9900ff;">style</span>=&quot;<span style="color:#9999ff;">text-decoration:none</span>&quot;</div>
<div>
	來消除連結的底線</div>
<div>
	當然所有的連結方式．並不一定用文字,用圖片也可以。</div>
</fieldset>
<a href="11.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:文字格式化</a> <a href="13.php" class="myButton">下一篇:文件內的連結 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>