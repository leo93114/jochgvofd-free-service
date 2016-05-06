<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>通過htaccess 404自定義錯誤頁面 - 次是慶宇.htaccess產生器</title>
<meta name="Keywords" content=".htaccess,htaccess,404,自定義,錯誤,頁面" />
<meta name="Description" content="這個問題難不倒萬能的htaccess，通過htaccess定義404錯誤可謂是小菜一碟，並且其它的錯誤類別也可以依葫蘆畫瓢。" />
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
<H2 align=center>htaccess 404錯誤頁面的自定義</H2>
<div id="google">
<?php include"adsense.php"; ?>
</div>
<P align=left>估計所有類型的頁面裡，404錯誤頁面是見得最多的一個頁面了，冷不防出現個冰冷的404，用戶體驗非常差，也會給SEO帶來不好的影響。一個好的404錯誤頁面不僅可以引導用戶至正確的頁面，也會給人一種賞心悅目的感覺。另外，也可以通過<A href="htaccess-301.php" target=_self>301重定向</A>來更好的解決該頁無法找到的問題。 </P>
<P align=left>如果網站建立不久，就出現了什麼改版、換程序等等，會在搜索引擎中產生大量的無效頁面，如果不及時處理，很可能使你的站在搜索引擎中降低地位。眾所周知，在Windows IIS裡面，可以直接通過管理工具自定義錯誤文檔，但這在Apache下如何實現呢？如果你用的是虛擬主機，無法自己定義，又該如何實現呢？ </P>
<P align=left>這個問題難不倒萬能的htaccess，通過htaccess定義404錯誤可謂是小菜一碟，並且其它的錯誤類別也可以依葫蘆畫瓢。 </P>
<P>一般來說，有兩種方法可以自己定義404錯誤頁面，一種是通過空間控制面板，這種方法簡單易行；另一種是自己建立htaccess文件，寫入定義：</P>
<P>&nbsp;<FONT color=#993300>ErrorDocument 404 http://www.jochgvofd.com/404.html</FONT></P>
<P align=left>該行代碼即定義404錯誤為404.html這個頁面。其中404為錯誤代碼，後面的網址為出現錯誤時需要返回的頁面。我們非常建議使用完整地址，這樣會減少出錯的機率。另外，還有很多常用的其它錯誤代碼也可以自己定義，如：</P>
<P align=left>400 - Bad request 錯誤的請求<BR>401 - Authorization Required 需要認證<BR>403 - Forbidden directory 禁止訪問<BR>404 - Page not found 無法找到該頁<BR>500 - Internal Server Error 內部服務器錯誤</P>
<P align=left>按照以上的格式添加進去即可。如果按照以上方法出現錯誤，可能是文件保存編碼的問題。因此，我們建議您使用我們的工具來替您全自動完成這項工作，或者使用notepad2來編寫該htaccess文件。 </P>
 </div>
<!--wrapperAll--> 
<div id="footer">
<?php include"footer.php"; ?>
</div><!--footer-->
</body>
</html>