<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>次是慶宇.htaccess產生器</title>
<meta name="Keywords" content=".htaccess,htaccess,線上,編輯,生產,製作,301,404" />
<meta name="Description" content="自動.htaccess線上編輯器，簡單完成您需要的301轉跳、404自訂等複雜工作！" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="stylesheet" href="share/css/top_cn.css" type="text/css" />
<script type="text/javascript" src="share/js/open.js"></script>
<script type="text/javascript" src="share/js/basic.js"></script>
<script type="text/javascript" src="share/js/makeHtaccess.js"></script>
<script type="text/javascript" src="share/js/prototype.lite.js"></script>
<script type="text/javascript" src="share/js/moo.fx.js"></script>
<script type="text/javascript" src="share/js/moo.fx.pack.js"></script>
<script type="text/javascript">
//the main function, call to the effect object
function subdownload() 
{ 
document.htaccessform.action= 'getfile.php';
document.htaccessform.method="POST";
document.htaccessform.submit(); 
}
function init(){
var stretchers = document.getElementsByClassName('stretcher'); //div that stretches
var toggles = document.getElementsByClassName('display'); //h3s where I click on
//accordion effect
var myAccordion = new fx.Accordion(
toggles, stretchers, {opacity: true, duration: 400}
);
//hash function
function checkHash(){
var found = false;
toggles.each(function(li, i){
if (window.location.href.indexOf(li.title) > 0) {
myAccordion.showThisHideOpen(stretchers[i]);
found = true;
}
});
return found;
}
if (!checkHash()) myAccordion.showThisHideOpen(stretchers[0]);
}
</script>
</head>
<body onload="showElement('naviFileList')">
<div id="wrapperAll">
<h1><a href="index.php"><img src="share/images/common_files/logo.png" alt=".htaccess Editor" width="500" /></a></h1>
<ul id="globalNavi"><li id="siteHome">
<?php include"menu.php"; ?>
</li></ul>
<ul id="sbs">
<?php include"share.php"; ?>
</ul>
<h2><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 尾端 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4999646866967900"
     data-ad-slot="9083437074"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</h2>
<div class="content" id="top">
<form name="htaccessform" action="">
<div id="inputForm">
<div id="itemColumn">
<ul>
<li class="display" title="設定是否允許服務器返回目錄列表與是否緩存圖片等等"><a href="#a_fileList" id="naviFileList" class="close" onclick="showElement('naviFileList ')" onkeypress="showElement('naviFileList');" onkeyup="showElement('naviFileList');" accesskey="f">常規全局設定</a></li>
<li class="display" title="對某些目錄下的文件設定密碼保護，阻止非法訪問"><a href="#a_basic" id="naviBasic" class="close" onclick="showElement(' naviBasic')" onkeypress="showElement('naviBasic');" onkeyup="showElement('naviBasic');" accesskey="b">文件夾密碼保護</a></li>
<li class="display" title="設定404、403等錯誤的預設頁面，提高用戶體驗"><a href="#a_errorPage" id="naviErrorPage" class="close" onclick="showElement('naviErrorPage ')" onkeypress="showElement('naviErrorPage');" onkeyup="showElement('naviErrorPage');" accesskey="e">自定義錯誤頁面</a></li>
<li class="display" title="自定義網站目錄的預設文檔，比如index.html等"><a href="#a_extension" id="naviExtension" class="close" onclick="showElement('naviExtension ')" onkeypress="showElement('naviExtension');" onkeyup="showElement('naviExtension');" accesskey="d">自定義預設文檔</a></li>
<li class="display" title="將帶WWW格式的網址與不帶WWW格式的網址進行統一，有利於SEO"><a href="#a_WWW" id="naviWWW" class="close" onclick ="showElement('naviWWW')" onkeypress="showElement('naviWWW');" onkeyup="showElement('naviWWW');" accesskey="w">WWW域名重定向</a></li>
<li class="display" title="設定重定向，更換域名或者改變網址等情況下非常有用"><a href="#a_redirect" id="naviRedirect" class="close" onclick="showElement(' naviRedirect')" onkeypress="showElement('naviRedirect');" onkeyup="showElement('naviRedirect');" accesskey="r">網頁重定向</a></li>
<li class="display" title="保護你的目錄不被非法訪問，比如限制訪問IP等等"><a href="#a_access" id="naviAccess" class="close" onclick="showElement( 'naviAccess')" onkeyup="showElement('naviAccess');" onkeypress="showElement('naviAccess');" accesskey="a">訪問權限控制</a></li>
<li class="display" title="自定義MIME文件類型"><a href="#a_MIME" id="naviMIME" class="close" onclick="showElement('naviMIME')" onkeyup="showElement( 'naviMIME');" onkeypress="showElement('naviMIME');" accesskey="s">MIME類型修改</a></li>
<li class="display" title="對於流量有限的網站來說，圖片防盜鏈可以有效的阻止其他網站盜鏈你的圖片文件"><a href="#a_Pic" id="naviPic" class= "close" onclick="showElement('naviPic')" onkeyup="showElement('naviPic');" onkeypress="showElement('naviPic');" accesskey="p">設定圖片防盜鏈</a></li>
</ul>
</div>

<div id="inputColumn">
<div id="wrapper">
<div class="stretcher" id="fileList">
<h3><p><strong>是否在沒有預設文檔的目錄顯示文件列表</strong></p></h3>
<p>一般來說，此項設定預設即可。如果您選擇“顯示”，則意味著訪問有些沒有預設文檔的目錄時，服務器會返回該目錄下的文件列表。請您注意，這可能給您的網站帶來安全隱患。 </p>
<p><select name="file_list" class="short" onchange="doAll()" onkeyup="doAll()" onblur="doAll()" >
<option value="" selected="selected">預設</option>
<option value="true">顯示</option>
<option value="false">隱藏</option>
</select></p>

<h3><p><strong>是否開啟網站的圖片緩存</strong></p></h3>
<p>如果您的網站包含了大量的圖片，並且一般不會更改，請嘗試開啟此項以設定圖片緩存。在某些情況下開啟此項可以加快頁面載入速度，減少服務器流量消耗。 </p>
<p><select name="Pic_cache" class="long" onchange="doAll()" onkeyup="doAll()" onblur="doAll()" >
<option value="" selected="selected">預設</option>
<option value="t600">開啟10分鐘緩存</option>
<option value="t3600">開啟1小時緩存</option>
<option value="t18000">開啟5小時緩存</option>
<option value="t86400">開啟24小時緩存</option>
<option value="t604800">開啟一周緩存</option>
<option value="t2592000">開啟一個月緩存</option>
</select></p>
</div>
<div class="stretcher" id="basic">
<h3>文件夾密碼保護</h3>
<div class="step1">
<p><strong>第一步</strong> 製作一個.htpasswd文件</p>
<table>
<tr class="line">
<th>用戶名</th>
<td><input name="user" type="text" size="30" class="shortMiddle" /></td>
</tr>
<tr>
<th>密碼</th>
<td><input name="pwd1" type="text" size="30" class="shortMiddle" /> 
<select name="taille">
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option selected="selected">10</option>
<option>11</option>
<option>12</option>
<option>15</option>
<option>20</option>
</select>個字
<input type="button" value="隨機密碼" onclick="generation(this.form)" class="btn" />
<input type="hidden" name="alg" value="1" /></td>
</tr>
<tr class="line">
<th>&nbsp;</th>
<td><input type="button" value="創建.htpasswd內容" onclick="this.form.pwd2.value=htpasswd(this.form.user.value, this.form.pwd1.value, this.form .alg)" class="btn" /></td>
</tr>
<tr>
<th>.htpasswd內容</th>
<td><input name="pwd2" type="text" size="60" class="longIcon" /><br />
點擊“創建.htpasswd內容”按鈕後，請將此欄的內容複製並儲存為.htpasswd文件，上傳至服務器。 </td>
</tr>
</table>
</div><!--step1-->
<div class="step2">
<p><strong>STEP 2</strong> 輸入上傳的.htpasswd文件的完整路徑（例：/home/foo/bar/.htpasswd）</p>
<p><input name="sitePathPwd" type="text" size="60" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></p>
</div><!--step2-->
</div>
<div class="stretcher" id="errorPage">
<h3>自定義錯誤頁面</h3>
<p>請輸入網址或錯誤頁面的路徑（例如：/404.html）</p>
<table>
<tr class="line">
<td class="code">400</td>
<td class="description">錯誤的請求</td>
<td class="page"><input name="error400" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">401</td>
<td class="description">認證失敗</td>
<td class="page"><input name="error401" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">402</td>
<td class="description">需要付費</td>
<td class="page"><input name="error402" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">403</td>
<td class="description">禁止訪問(Forbidden)</td>
<td class="page"><input name="error403" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">404</td>
<td class="description">未找到(Not Found)</td>
<td class="page"><input name="error404" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">405</td>
<td class="description">方法不允許</td>
<td class="page"><input name="error405" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">406</td>
<td class="description">不可接受</td>
<td class="page"><input name="error406" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">407</td>
<td class="description">需要代理認證</td>
<td class="page"><input name="error407" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">408</td>
<td class="description">請求超時</td>
<td class="page"><input name="error408" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">409</td>
<td class="description">請求衝突</td>
<td class="page"><input name="error409" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">410</td>
<td class="description">失敗</td>
<td class="page"><input name="error410" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">411</td>
<td class="description">需要長度</td>
<td class="page"><input name="error411" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">412</td>
<td class="description">條件失敗</td>
<td class="page"><input name="error412" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">413</td>
<td class="description">請求實體太長</td>
<td class="page"><input name="error413" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">414</td>
<td class="description">請求URI太長</td>
<td class="page"><input name="error414" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">500</td>
<td class="description">服務器內部錯誤</td>
<td class="page"><input name="error500" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">501</td>
<td class="description">未實現</td>
<td class="page"><input name="error501" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">502</td>
<td class="description">錯誤的網路</td>
<td class="page"><input name="error502" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">503</td>
<td class="description">服務不可用</td>
<td class="page"><input name="error503" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr>
<td class="code">504</td>
<td class="description">網路超時</td>
<td class="page"><input name="error504" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
<tr class="line">
<td class="code">505</td>
<td class="description">HTTP版本不支持</td>
<td class="page"><input name="error505" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" /></td>
</tr>
</table>
</div>
<div class="stretcher" id="extension">
<div class="leftColumn">
<div class="item">
<h3>預設頁面</h3>
<p>請輸入文件名（例：index.html）</p>
<p>

<input name="extension1" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /><br />
<input name="extension2" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /><br />
<input name="extension3" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /><br />
<input name="extension4" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" />
<input name="extension5" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /><br />
<input name="extension6" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /><br />
<input name="extension7" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /><br />
<input name="extension8" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" />
</p>
</div><!--item-->
</div><!--leftColumn-->
<div class="rightColumn">
<!--div class="item">
<H3>使用的SSI（服務器端包含）</ H3>
<P>勾選複選框</ P>
<p><input name="ssiShtml" type="checkbox" value="" onkeyup="doAll()" onblur="doAll()" /> SSI中的.shtml格式使用<br />
<input name="ssiHtml" type="checkbox" value="" onkeyup="doAll()" onblur="doAll()" /> SSI的html格式
</p>
</div--><!--item-->
</div><!--rightColumn-->
</div><!--stretcher-->
<div class="stretcher" id="WWW">
<h3>WWW域名重定向</h3>
<p>請輸入您最終決定使用的網址（比如http://jochgvofd.com 或者http://www.jochgvofd.com，程序將自動判斷重定向類型）</p>
<p><input value="http://" name="unifiedURL" type="text" size="36" class="longIcon" onkeyup="doAll()" onblur="doAll()" />< /p>
</div>
<div class="stretcher" id="redirect">
<h3>網頁重定向</h3>
<p>在“原地址”輸入網站路徑、“目標”內輸入網址</p>
<p>示例：</p>
<p>原地址：/ 目標：http://www.new.com/</p>
<p>將所有文件（夾）重定向到http://www.new.com/一一對應的頁面</p>
<p>原地址：/old.html 目標：http://www.old.com/new.html</p>
<p>將頁面old.html內容重定向到http://www.old.com/new.html頁面</p>
<p>不會使用？參見<a href="http://www.jochgvofd.com/?post=9" target="_blank">.htaccess的重定向方法詳解</a>進行學習。 </p>
<p><strong>301 Moved Permanently</strong> 永久重定向</p>
<ul>
<li class="line">原地址:&nbsp;<input name="redirectFrom1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
目標:&nbsp;<input name="redirectTo1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>原地址:&nbsp;<input name="redirectFrom2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
目標:&nbsp;<input name="redirectTo2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">原地址:&nbsp;<input name="redirectFrom3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
目標:&nbsp;<input name="redirectTo3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<!-​​-li>From:&nbsp;<input name="redirectFrom4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirectTo4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">From:&nbsp;<input name="redirectFrom5" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirectTo5" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>From:&nbsp;<input name="redirectFrom6" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirectTo6" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">From:&nbsp;<input name="redirectFrom7" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirectTo7" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>From:&nbsp;<input name="redirectFrom8" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirectTo8" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li-->
</ul>

<p style="margin-top: 15px;"><strong>302 Moved Temporarily</strong> 臨時重定向</p>
<ul>
<li class="line">原地址:&nbsp;<input name="redirect302From1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
目標:&nbsp;<input name="redirect302To1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>原地址:&nbsp;<input name="redirect302From2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
目標:&nbsp;<input name="redirect302To2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">原地址:&nbsp;<input name="redirect302From3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
目標:&nbsp;<input name="redirect302To3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<!-​​-li>From:&nbsp;<input name="redirect302From4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirect302To4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">From:&nbsp;<input name="redirect302From5" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirect302To5" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>From:&nbsp;<input name="redirect302From6" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirect302To6" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">From:&nbsp;<input name="redirect302From7" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirect302To7" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>From:&nbsp;<input name="redirect302From8" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
To:&nbsp;<input name="redirect302To8" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li-->
</ul>
</div>
<div class="stretcher" id="access">
<h3>訪問權限控制</h3>
<div class="leftColumn">
<p>請輸入允許訪問的路徑（IP）：</p>
<ul>
<li class="line">OK:&nbsp;<input name="blockOK1" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li>OK:&nbsp;<input name="blockOK2" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">OK:&nbsp;<input name="blockOK3" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li>OK:&nbsp;<input name="blockOK4" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">OK:&nbsp;<input name="blockOK5" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li>OK:&nbsp;<input name="blockOK6" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">OK:&nbsp;<input name="blockOK7" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li>OK:&nbsp;<input name="blockOK8" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
</ul>
</div>
<div class="rightColumn">
<p>請輸入拒絕訪問的路徑（IP）：</p>
<ul>
<li class="line">NG:&nbsp;<input name="blockNG1" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /> </li>
<li>NG:&nbsp;<input name="blockNG2" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">NG:&nbsp;<input name="blockNG3" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /> </li>
<li>NG:&nbsp;<input name="blockNG4" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">NG:&nbsp;<input name="blockNG5" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /> </li>
<li>NG:&nbsp;<input name="blockNG6" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">NG:&nbsp;<input name="blockNG7" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /> </li>
<li>NG:&nbsp;<input name="blockNG8" type="text" size="36" class="middle" onkeyup="doAll()" onblur="doAll()" /></li>
</ul>
</div><!--rightColumn-->
</div><!--stretcher-->

<div class="stretcher" id="MIME">
<h3>MIME類型自定義</h3>
<p>輸入您的文件名後綴（不需要加小數點）</p>
<p><strong>添加MIME</strong></p>
<ul>
<li class="line">文件後綴:&nbsp;<input name="MIMEForm1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
類型:&nbsp;<input name="MIME1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li>文件後綴:&nbsp;<input name="MIMEForm2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" />
類型:&nbsp;<input name="MIME2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">文件後綴:&nbsp;<input name="MIMEForm3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
類型:&nbsp;<input name="MIME3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">文件後綴:&nbsp;<input name="MIMEForm4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
類型:&nbsp;<input name="MIME4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">文件後綴:&nbsp;<input name="MIMEForm5" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
類型:&nbsp;<input name="MIME5" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
<li class="line">文件後綴:&nbsp;<input name="MIMEForm6" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" / >
類型:&nbsp;<input name="MIME6" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll()" /></li>
</ul>
</div><!--stretcher-->

<div class="stretcher" id="Pic">
<h3>圖片文件防盜鏈</h3>
<p>輸入允許鏈接您圖片的域名與您希望替換後圖片的地址。尤其註意，替換後文件的地址不能是您當前域名內的文件，否則將造成循環。 </p>
<p>比如：允許訪問的域名輸入“yoursite.com”、“baidu.com”、“google.com”（不帶http://與www，僅輸入頂級域名，別忘了添加自己的域名） ，</p>
<p>替換成圖片輸入完整網址：“http://www.jochgvofd.com/photo.jpg”</p>
<p><strong>允許以下域名訪問圖片：</strong></p>
<ul>
<li class="line">頂級域名（1）:&nbsp;<input name="PicForm1" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll( )" /></li>
<li class="line">頂級域名（2）:&nbsp;<input name="PicForm2" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll( )" /></li>
<li class="line">頂級域名（3）:&nbsp;<input name="PicForm3" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll( )" /></li>
<li class="line">頂級域名（4）:&nbsp;<input name="PicForm4" type="text" size="36" class="longIconRedirect" onkeyup="doAll()" onblur="doAll( )" /></li>
<p><strong>將非法盜鏈的圖片替換為：</strong></p>
<li class="line">完整地址（帶“http://”）:&nbsp;<input name="Pic1" type="text" size="64" class="longIconRedirect" onkeyup="doAll() " onblur="doAll()" /></li>
</ul>
</div><!--stretcher-->

</div><!--wrapper-->
</div><!--inputColumn-->
<script type="text/javascript">
Element.cleanWhitespace('wrapper');
init();
</script>
<br class="clear" />
</div>
<!--inputForm-->

<div id="google">
<?php include"adsense.php"; ?>
</div>

<div id="outputArea">
<p class="info">生成的代碼：</p>
<textarea name="htaccess" cols="80" rows="15"></textarea>
<input type="submit" class="botton" value="下載.htaccess文件" name="d​​ownload" onclick= "subdownload()">
<p class="info">當您設定好後，請點擊上面的按鈕下載該文件。注意：由於Windows系統的Bug，請手動在保存對話框中將文件名改為“.htaccess”，將文件類型選成“所有”。然後將文件上傳到網站的相關目錄中去。 </p>
<p>由於編碼問題，請您不要嘗試通過“記事本”編輯該文件，否則可能導致文件錯誤。 </p>

</div><!--outputArea-->
</form>
</div><!--content-->
</div>
<!--wrapperAll-->
<div id="footer">
<?php include"footer.php"; ?>
</div><!--footer-->
</body>
</html>
