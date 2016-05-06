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
<h1>表格設定</h1>
<fieldset>
<div>
	表格是每一個網頁不可缺少的東西，首先我們要加入<span style="color:#cc00cc;">&lt;table&gt;</span>的碼，在<span style="color:#cc00cc;">&lt;table&gt;</span>的標籤內可以控制整個表格的長度和外框的粗細 :</div>
<div>
	&nbsp;</div>
<div>
	 &lt;table <span style="color:#cc00cc;">width</span>=&quot;<span style="color:#9900ff;">300</span> <span style="color:#cc00cc;">border</span>=&quot;<span style="color:#9900ff;">1</span> <span style="color:#cc00cc;">cellspacing</span>=&quot;<span style="color:#9900ff;">2</span>&gt;</div>
<div>
	 &nbsp;</div>
<div>
	<span style="color:#cc00cc;"><span>width</span></span>=控制表格長度，可用數字或百分比</div>
<div>
	<span style="color:#cc00cc;">cellspaing</span>=控制儲存格的分隔距離，內定為2</div>
<div>
	<span style="color:#cc00cc;">background</span>=背景圖檔</div>
<div>
	<span style="color:#cc00cc;">border</span>=控制外框粗細，不外框便設成0</div>
<div>
	這只是一開始的設定，必須在<span style="color:#cc00cc;">&lt;table&gt;</span>後加上<span style="color:#cc00cc;">&lt;td&gt;</span>，才會新開一個儲存格，再用<span style="color:#9900ff;">&lt;/td&gt;</span>來關閉儲存格 :</div>
<div>
	&nbsp;</div>
<div>
	&lt;table border=1&gt;</div>
<div>
	<span style="color:#cc00cc;">&lt;td&gt;</span>儲存格1<span style="color:#9900ff;"><span>&lt;/td&gt;</span></span></div>
<div>
	<span style="color:#cc00cc;">&lt;td&gt;</span>儲存格2<span style="color:#9900ff;"><span>&lt;/td&gt;</span></span></div><div>
	&lt;/table&gt;</div>
<div><br /><table border=1>
<td>儲存格1</td>
<td>儲存格2</td>
	</table></div>
若想跳到下一行，加上<tr>即可 :
<div>
	&lt;table border=1&gt;</div>
<div>
	&lt;td&gt;儲存格1&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格2&lt;/td&gt;</div>
<div>
	<span style="color:#cc00cc;">&lt;tr&gt;</span></div>
<div>
	&lt;td&gt;儲存格3&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格4&lt;/td&gt;</div>
<div>
	&lt;/table&gt;</div><br /><table border=1>
<td>儲存格1</td>
<td>儲存格2</td>
<tr>
<td>儲存格3</td>
<td>儲存格4</td>
</table>
<div>
	當然亦可使用&lt;th&gt;:</div>
<div>
	 &lt;table border=1&gt;</div>
<div>
	&lt;th&gt;儲存格1&lt;/th&gt;</div>
<div>
	&lt;th&gt;儲存格2&lt;/th&gt;</div>
<div>
	<span style="color:#cc00cc;">&lt;tr&gt;</span></div>
<div>
	&lt;td&gt;儲存格3&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格4&lt;/td&gt;</div> <table border=1>
<th>儲存格1</th>
<th>儲存格2</th>
<tr>
<td>儲存格3</td>
<td>儲存格4</td>
</table>
<div>
	&lt;td&gt;&lt;th&gt;內的屬性如下 :</div>
<div>
	&nbsp;</div>
<div>
	<span style="color:#cc00cc;">align</span>=控制水平是<span style="color:#9900ff;">left</span>(靠左)／<span style="color:#9900ff;">center</span>(置中)／<span style="color:#9900ff;">right</span>(靠右)</div>
<div>
	<span style="color:#cc00cc;">valign</span>=控制垂直是<span style="color:#9900ff;">top</span>(靠上)／<span style="color:#9900ff;">middle</span>(置中)／<span style="color:#9900ff;">bottom</span>(靠下)</div>
<div>
	<span style="color:#cc00cc;">background</span>=背景圖檔</div>
<div>
	<span style="color:#cc00cc;">colspan</span>=使一個儲存格橫跨 N 個欄位</div>
<div>
	<span style="color:#cc00cc;">rowspan</span>=使一個儲存格下跨 N 個列</div>
<div>
	若想為表格加上標題，來標明整個表格的主題，可在<span style="color:#cc00cc;">&lt;table&gt;</span>後加上<span style="color:#cc00cc;">&lt;caption&gt;</span>的標籤</div><div>
	&lt;table border=1&gt;</div>
<div>
	<span style="color: rgb(204, 0, 204);">&lt;caption&gt;</span>公佈欄<span style="color: rgb(153, 0, 255);">&lt;/caption&gt;</span></div>
<div>
	&lt;td&gt;儲存格1&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格2&lt;/td&gt;</div>
<div>
	&lt;tr&gt;</div>
<div>
	&lt;td&gt;儲存格3&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格4&lt;/td&gt;</div>
<div>
	&lt;/table&gt;</div>
<div>若想為表格加上標題，來標明整個表格的主題，可在<span style="color: rgb(204, 0, 204);">&lt;table&gt;</span>後加上<span style="color: rgb(153, 0, 255);">&lt;caption&gt;</span>的標籤</div>
<table border=1>
<caption>公佈欄</caption>
<td>儲存格1</td>
<td>儲存格2</td>
<tr>
<td>儲存格3</td>
<td>儲存格4</td>
</table>
<div>
	<span style="color:#cc00cc;">colspan</span>的用法 :</div>
<div>
	
		&lt;table border=1&gt;
</div>
<div>
	&lt;td <span style="color:#cc00cc;">colspan</span>=<span style="color:#9900ff;">3</span> align=center&gt;儲存格 a1&lt;/td&gt;</div>
<div>
	&lt;tr&gt;</div>
<div>
	&lt;td&gt;儲存格 b1&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格 b2&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格 b3&lt;/td&gt;</div>
<div>
	&lt;/table&gt;</div><table border=1>
<td colspan=3 align=center>儲存格 a1</td>
<tr>
<td>儲存格 b1</td>
<td>儲存格 b2</td>
<td>儲存格 b3</td>
</table>
<div>
	<span style="color:#cc00cc;">owspan</span>的用法 :</div>
<div>
	&lt;table border=1&gt;</div>
<div>
	&lt;td <span style="color:#cc00cc;">rowspan</span>=<span style="color:#9900ff;">3</span> align=center&gt;儲存格 A1&lt;/td&gt;</div>
<div>
	&lt;td&gt;儲存格 B1&lt;/td&gt;</div>
<div>
	&lt;tr&gt;</div>
<div>
	&lt;td&gt;儲存格 B2&lt;/td&gt;</div>
<div>
	&lt;tr&gt;</div>
<div>
	&lt;td&gt;儲存格 B3&lt;/td&gt;</div>
<div>
	&lt;/table&gt;</div>
<table border=1>
<td rowspan=3 align=center>儲存格 A1</td>
<td>儲存格 B1</td>
<tr>
<td>儲存格 B2</td>
<tr>
<td>儲存格 B3</td>
</table>
</fieldset>
<a href="14.php" class="myButton"><img src="image/Back.gif" width="20" height="20"> 上一篇:插入圖片</a> <a href="16.php" class="myButton">下一篇:分割視窗 <img src="image/next.gif" width="20" height="20"></a>
</div>
<font size=5 color="#9900ff">
<td><?php require_once('./image/len.php'); ?></td></font>
</body>
</html>
</span>