<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>.htaccess簡介 - 次是慶宇.htaccess產生器</title>
<meta name="Keywords" content=".htaccess,htaccess,簡介,作用,生成" />
<meta name="Description" content="htaccess文件是Apache服務器中的一個配置文件，它負責相關目錄下的網頁配置。通過htaccess文件" />
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
<H2 align=center>htaccess是什麼文件</H2>
<div id="google">
<?php include"adsense.php"; ?>
</div>
<P>htaccess文件是Apache服務器中的一個配置文件，它負責相關目錄下的網頁配置。通過htaccess文件，可以幫我們實現：網頁301重定向、自定義404錯誤頁面、改變文件擴展名、允許/阻止特定的用戶或者目錄的訪問、禁止目錄列表、配置默認文檔等功能。 </P>
<P>一般來說，htaccess文件需要放在網站的根目錄下才能控制整個站點，並且在Linux系統中，需要把其權限設置為644以提高安全性。國內很多主機提供商都通過一定技術手段禁用了該文件，但是國外大多數空間商都是支持該文件的，可以極大的擴展虛擬主機的功能</P>
<P>.htaccess文件中的配置指令作用於.htaccess文件所在的目錄及其所有子目錄，但是很重要的、需要注意的是，其上級目錄也可能會有.htaccess文件，而指令是按查找順序依次生效的，所以一個特定目錄下的.htaccess文件中的指令可能會覆蓋其上級目錄中的.htaccess文件中的指令，即子目錄中的指令會覆蓋父目錄或者主配置文件中的指令。 </P>
<P>在實際應用中，用戶最常用其重定向功能與偽靜態功能，比如把一個PHP的動態頁面定義成一個HTML後綴的靜態頁面URL形式，這種形式在用戶端完全無法看出來，因此，偽靜態也是SEO的一種重要手段。常見的程序比如PHPwind、DedeCMS、Wordpress等都支持自動偽靜態。 </P>
<P>本文件應該由UTF-8編碼，或者不添加BOM的Windows編碼也可以。因此，不能使用Windows系統自帶的記事本程序來編寫Htaccess文件，常見的Notepad2等軟件可以用來編寫該文件。 </P>
<P>如果手頭沒有編輯工具或者不方便下載，可以通過本站的“<A href="index.php" target=_self>.htaccess製作生成編輯器</A>”來自動處理這個文件。我們已經完全修正了這套程序中原來存在的很多錯誤，並且增加了很多使用的功能（比如直接下載），您可以放心使用。但由於服務器系統的不確定性，我們強烈建議您在上傳之前，將原來的文件備份。本站不可能因使用這套程序造成的損失承擔任何責任。 </P>
 </div> 
<!--wrapperAll--> 
<div id="footer">
<?php include"footer.php"; ?>
</div><!--footer-->
</body>
</html>