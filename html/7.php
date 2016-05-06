<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<span style="font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;">
<html>
<head>
<title>次是慶宇HTML語法整理</title>
<style>
<link rel=stylesheet type="text/css" href="image/joch.css">
</head>
<body>
<p>
	<td><?php require_once('./image/header.php'); ?></td></p><div style="text-align: center;">
<a href="index.php"><img src="image/logo.png"></a>
</div>
<h1>清單設定方式</h1>
<fieldset>
<h3>
	圓頭清單</h3>
<div>
	只要加入<span style="color:#cc00cc;">&lt;ul&gt;</span>的碼，便可製出有小圓頭的清單 :</div>
<div>
	<div>
		<span style="color:#cc00cc;">&lt;ul&gt;</span></div>
	<div>
		<span style="color:#9900ff;">&lt;li&gt;</span>物件清單1</div>
	<div>
		<span style="color:#9900ff;">&lt;li&gt;</span>物件清單2</div>
	<div>
		<span style="color:#9900ff;">&lt;li&gt;</span>物件清單3</div>
	<div>
		<span style="color:#9900ff;">&lt;/ul&gt;</span></div>
	<div>
		上面的原始碼會顯示成下面的樣子 :</div>
</div>
<ul>
<li>物件清單1
<li>物件清單2
<li>物件清單3
</ul>
<h3>
	數字清單</h3>
<p>
	跟小圓頭的方式很像，只要加入<span style="color:#cc00cc;">&lt;ol&gt;</span>的碼，便可製出有數字的清單 :</p>
<div>
	<div>
		<span style="color:#cc00cc;">&lt;ol&gt;</span></div>
	<div>
		<span style="color:#9900ff;">&lt;li&gt;</span>清單1</div>
	<div>
		<span style="color:#9900ff;">&lt;li&gt;</span>清單2</div>
	<div>
		<span style="color:#9900ff;">&lt;li&gt;</span>清單3</div>
	<div>
		<span style="color:#9900ff;">&lt;/ol&gt;</span></div>
	<div>
		上面的原始碼會顯示成下面的樣子 :</div>
</div>
<ol>
<li>清單1
<li>清單2
<li>清單3
</ol>
<h3>
	定義清單</h3>
<div>
	一般做為解釋一樣動作，加入以下的碼便可做一個定義清單</div>
<div>
	<span style="color:#cc00cc;">&lt;dl&gt;</span></div>
<div>
	<span style="color:#9900ff;">&lt;dt&gt;</span>次是慶宇</div>
<div>
	<span style="color:#9900ff;">&lt;dd&gt;</span>免費服務</div>
<div>
	<span style="color:#9900ff;">&lt;dt&gt;</span>HTML</div>
<div>
	<span style="color:#9900ff;">&lt;dd&gt;</span>語法教學網</div>
<div>
	<span style="color:#cc00cc;">&lt;/dl&gt;</span></div>
<div>
	&nbsp;</div>
<div>
	上面的原始碼會顯示成下面的樣子 :</div>
<dl>
<dt>次是慶宇
<dd>免費服務
<dt>HTML
<dd>語法教學網
</dl>
</fieldset>
<a href="6.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:加入水平分線</a> <a href="8.php" class="myButton">下一篇:標題文字 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>