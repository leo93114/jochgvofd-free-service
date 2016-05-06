<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>htaccess偽靜態設置方法 - 次是慶宇.htaccess產生器</title>
<meta name="Keywords" content=".htaccess,htaccess,偽靜態,規則,設置,方法,SEO" />
<meta name="Description" content="利用.htaccess文件可以很好的進行站點偽靜態，並且形成的目標地址與真正的靜態頁面幾乎一模一樣，如abc.html等，偽靜態可以非常好的結合SEO " />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="stylesheet" href="share/css/top_cn.css" type="text/css" />
</head>
<body onload="showElement('naviFileList')">
<div id="wrapperAll">
<h1><a href="index.php"><img src="share/images/common_files/logo.png" alt=".htaccess Editor" width="500" /></a ></h1>
<ul id="globalNavi"><li id​​="siteHome">
<?php include"menu.php"; ?>
</li></ul>
<ul id="sbs">
<?php include"share.php"; ?>
</ul>
<H2 align=center>htaccess 偽靜態的規則</H2>
<div id="google">
<?php include"adsense.php"; ?>
</div>
<P align=left>利用htaccess文件可以很好的進行站點偽靜態，並且形成的目標地址與真正的靜態頁面幾乎一模一樣，如abc.html等，偽靜態可以非常好的結合SEO來提高站點的排名，並且也能給人一種穩定的印象。 </P>
<P align=left>由於偽靜態必須要完全根據不同的站點進行不同的設置，因此，我們僅能簡單介紹其原理，給出幾個常用程序的示例：</P>
<P align=left>若要通過<A href="index.php" target=_self>htaccess使用偽靜態</A>，則必須空間商支持Rewrite模塊，該模塊負責URL的重寫。否則即便是設置好了，也無法使用，並且還有可能出現500錯誤。 </P>
<P align=left><STRONG>下面是Discuz的偽靜態設置文本：</STRONG></P>
<P align=left><FONT color=#993300># 將RewriteEngine 模式打開<BR>RewriteEngine On <BR># Rewrite 系統規則請勿修改<BR>RewriteRule ^archiver/((fid|tid)-[0- 9]+\.html)$ archiver/index.php?$1 <BR>RewriteRule ^forum-([0-9]+)-([0-9]+)\.html$ forumdisplay.php?fid=$1 &amp;page=$2 <BR>RewriteRule ^thread-([0-9]+)-([0-9]+)-([0-9]+)\.html$ viewthread.php?tid=$1&amp ;extra=page\%3D$3&amp;page=$2 <BR>RewriteRule ^space-(username|uid)-(.+)\.html$ space.php?$1=$2 <BR>RewriteRule ^tag-(. +)\.html$ tag.php?name=$1</FONT></P>
<P align=left><STRONG>以下是Phpwind的偽靜態設置文本：<IFMODULE mod_rewrite.c> </STRONG></P>
<P align=left><FONT color=#993300>RewriteEngine On <BR>RewriteBase / <BR>RewriteRule ^(.*)-htm-(.*)$ $1.php?$2 <BR>RewriteRule ^(.* )simple/([a-z0-9\_]+\.html)$ $1/simple/index.php?$2</FONT></P>
<P align=left>此外，還有很多種不同的規則，如果想制定出適用於自己站點的偽靜態規則，必須熟悉網站結構和正則表達式。 </P>
 </div>
<!--wrapperAll--> 
<div id="footer">
<?php include"footer.php"; ?>
</div><!--footer-->
</body>
</html>