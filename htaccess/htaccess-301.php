<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>htaccess 301重定向的實現</title>
<meta name="Keywords" content=".htaccess,htaccess,301,重定向,301跳轉,302" />
<meta name="Description" content="通過htaccess文件實現網頁的301重定向跳轉，在很多情況下，網站都需要進行301或302重定向，其中一個為永久重定向，一個為臨時重定向。 " />
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
<H2 align=center>通過htaccess實現301重定向</H2>
<div id="google">
<?php include"adsense.php"; ?>
</div>
<P align=left>在很多情況下，網站都需要進行301或302重定向，其中一個為永久重定向，一個為臨時重定向。比如網站整個更換了域名，比如網站結構或目錄發生了移動，比如需要將某個域名上的文件遷移到另外的域上等等。 </P>
<P align=left>有時候這種重定向對SEO或者PR值的傳遞是非常有效的。一般我們有幾種途徑<A href="index.php" target=_self>製作一個htaccess文件</A>，比如自己手動編輯，好處是非常靈活、功能強大，但壞處是很容易出錯，我們強烈建議用本站的工具自動生成這個文件；另一種途徑是通過空間裡的控制面板進行自動編輯，這種方法比較死板，但不會因為人為原因出錯，除非設置錯了。 </P>
<P align=left>比如CPanel控制面板中，在Domain&gt;Redirects裡面，直接選擇相應的選項即可。下面我們來詳細討論一下如何手動編輯這個htaccess文件：</P>
<P align=left>務必注意：在編輯之前請備份原來的htaccess文件，以免造成損失。 </P>
<P align=left>1、出於SEO考慮，將jochgvofd.com重定向至www.jochgvofd.com。本站就使用了這種重定向的方法避免頁面權重分散。 </P>
<P align=left>一旦選擇了帶WWW的為主域名，今後就不要隨意更改，方法如下：</P>
<P align=left>RewriteEngine On<BR>RewriteCond %{HTTP_HOST} !^www.jochgvofd.com$ [NC] <BR>RewriteRule ^(.*)$ http://www.jochgvofd.com/$1 [L ,R=301]</P>
<P align=left>上面這一句話是從反面來寫的：如果域名不是帶WWW的，就統一301跳轉到帶WWW的域名中去</P>
<P align=left>2、如果需要將域名從www.jochgvofd.com跳轉到jochgvofd.com，則可以使用一下代碼：</P>
<P align=left>RewriteEngine On <BR>RewriteCond %{HTTP_HOST} !^jochgvofd.com$ [NC] <BR>RewriteRule ^(.*)$ http://jochgvofd.com/$1 [L,R=301 ]</P>
<P align=left>3、如果需要變更域名，即將老域名換成全新的域名，但是網頁內容與結構不變，則可以使用以下代碼來實現：</P>
<P align=left>RewriteEngine On <BR>RewriteBase / <BR>RewriteCond %{HTTP_HOST} !olddomain.com$ [NC] <BR>RewriteRule ^(.*)$ http://newdomain.com/$1 [L ,R=301]</P>
<P align=left>如果是帶WWW的域名間跳轉，則以此類推，在域名前加上WWW即可。 </P>
<P align=left>一般來說，以上這些是網站建設過程中非常常用的幾行代碼。這些代碼對Google非常適用，Google很快就會按照你的意願將收錄的網址改變過來，並且如果換了域名，還能保留以前域名的PR值。 </P>
 </div>
<!--wrapperAll--> 
<div id="footer">
<?php include"footer.php"; ?>
</div><!--footer-->
</body>
</html>