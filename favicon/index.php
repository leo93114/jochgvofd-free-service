<span style="font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;">
<?php
$output = "";
if($_FILES['upimage']!=''){
if(isset($_FILES['upimage']['tmp_name']) && $_FILES['upimage']['tmp_name'] && is_uploaded_file($_FILES['upimage']['tmp_name'])){
if($_FILES['upimage']['type']>512000){
$typeinfo = "你上傳的文件大小超過了限制 最大不能超過512K";
}
$fileext = array("image/pjpeg","image/jpeg","image/gif","image/x-png");
if(!in_array($_FILES['upimage']['type'],$fileext)){
$typeinfo =  "你上傳的文件格式不正確 只支持 jpg，gif，png";
}
if($im = @imagecreatefrompng($_FILES['upimage']['tmp_name']) or $im = @imagecreatefromgif($_FILES['upimage']['tmp_name']) or $im = @imagecreatefromjpeg($_FILES['upimage']['tmp_name'])){
$imginfo = @getimagesize($_FILES['upimage']['tmp_name']);
if(!is_array($imginfo)){
$typeinfo = "圖形格式錯誤！無法處理這張圖片.";
}
switch($_POST['size']){
case 1;
$resize_im = @imagecreatetruecolor(16,16);
$size = 16;
break;
case 2;
$resize_im = @imagecreatetruecolor(32,32);
$size = 32;
break;
case 3;
$resize_im = @imagecreatetruecolor(48,48);
$size = 48;
break;
default;
$resize_im = @imagecreatetruecolor(32,32);
$size = 32;
break;
}
imagecopyresampled($resize_im,$im,0,0,0,0,$size,$size,$imginfo[0],$imginfo[1]);
class phpthumb_ico {
function phpthumb_ico() {
return true;
}

function GD2ICOstring(&$gd_image_array) {
foreach ($gd_image_array as $key => $gd_image) {
$ImageWidths[$key] = ImageSX($gd_image);
$ImageHeights[$key] = ImageSY($gd_image);
$bpp[$key] = ImageIsTrueColor($gd_image) ? 32 : 24;
$totalcolors[$key] = ImageColorsTotal($gd_image);
$icXOR[$key] = '';
for ($y = $ImageHeights[$key] - 1; $y >= 0; $y--) {
for ($x = 0; $x < $ImageWidths[$key]; $x++) {
$argb = $this->GetPixelColor($gd_image, $x, $y);
$a = round(255 * ((127 - $argb['alpha']) / 127));
$r = $argb['red'];
$g = $argb['green'];
$b = $argb['blue'];
if ($bpp[$key] == 32) {
$icXOR[$key] .= chr($b).chr($g).chr($r).chr($a);
} elseif ($bpp[$key] == 24) {
$icXOR[$key] .= chr($b).chr($g).chr($r);
}
if ($a < 128) {
@$icANDmask[$key][$y] .= '1';
} else {
@$icANDmask[$key][$y] .= '0';
}
}
// mask bits are 32-bit aligned per scanline
while (strlen($icANDmask[$key][$y]) % 32) {
$icANDmask[$key][$y] .= '0';
}
}
$icAND[$key] = '';
foreach ($icANDmask[$key] as $y => $scanlinemaskbits) {
for ($i = 0; $i < strlen($scanlinemaskbits); $i += 8) {
$icAND[$key] .= chr(bindec(str_pad(substr($scanlinemaskbits, $i, 8), 8, '0', STR_PAD_LEFT)));
}
}
}
foreach ($gd_image_array as $key => $gd_image) {
$biSizeImage = $ImageWidths[$key] * $ImageHeights[$key] * ($bpp[$key] / 8);
// BITMAPINFOHEADER - 40 bytes
$BitmapInfoHeader[$key] = '';
$BitmapInfoHeader[$key] .= "\x28\x00\x00\x00"; // DWORD biSize;
$BitmapInfoHeader[$key] .= $this->LittleEndian2String($ImageWidths[$key], 4); // LONG biWidth;
// The biHeight member specifies the combined
// height of the XOR and AND masks.
$BitmapInfoHeader[$key] .= $this->LittleEndian2String($ImageHeights[$key] * 2, 4); // LONG biHeight;
$BitmapInfoHeader[$key] .= "\x01\x00"; // WORD biPlanes;
$BitmapInfoHeader[$key] .= chr($bpp[$key])."\x00"; // wBitCount;
$BitmapInfoHeader[$key] .= "\x00\x00\x00\x00"; // DWORD biCompression;
$BitmapInfoHeader[$key] .= $this->LittleEndian2String($biSizeImage, 4); // DWORD biSizeImage;
$BitmapInfoHeader[$key] .= "\x00\x00\x00\x00"; // LONG biXPelsPerMeter;
$BitmapInfoHeader[$key] .= "\x00\x00\x00\x00"; // LONG biYPelsPerMeter;
$BitmapInfoHeader[$key] .= "\x00\x00\x00\x00"; // DWORD biClrUsed;
$BitmapInfoHeader[$key] .= "\x00\x00\x00\x00"; // DWORD biClrImportant;
}

$icondata = "\x00\x00"; // idReserved; // Reserved (must be 0)
$icondata .= "\x01\x00"; // idType; // Resource Type (1 for icons)
$icondata .= $this->LittleEndian2String(count($gd_image_array), 2); // idCount; // How many images?
$dwImageOffset = 6 + (count($gd_image_array) * 16);
foreach ($gd_image_array as $key => $gd_image) {
// ICONDIRENTRY idEntries[1]; // An entry for each image (idCount of 'em)
$icondata .= chr($ImageWidths[$key]); // bWidth; // Width, in pixels, of the image
$icondata .= chr($ImageHeights[$key]); // bHeight; // Height, in pixels, of the image
$icondata .= chr($totalcolors[$key]); // bColorCount; // Number of colors in image (0 if >=8bpp)
$icondata .= "\x00"; // bReserved; // Reserved ( must be 0)
$icondata .= "\x01\x00"; // wPlanes; // Color Planes
$icondata .= chr($bpp[$key])."\x00"; // wBitCount; // Bits per pixel
$dwBytesInRes = 40 + strlen($icXOR[$key]) + strlen($icAND[$key]);
$icondata .= $this->LittleEndian2String($dwBytesInRes, 4); // dwBytesInRes; // How many bytes in this resource?
$icondata .= $this->LittleEndian2String($dwImageOffset, 4); // dwImageOffset; // Where in the file is this image?
$dwImageOffset += strlen($BitmapInfoHeader[$key]);
$dwImageOffset += strlen($icXOR[$key]);
$dwImageOffset += strlen($icAND[$key]);
}
foreach ($gd_image_array as $key => $gd_image) {
$icondata .= $BitmapInfoHeader[$key];
$icondata .= $icXOR[$key];
$icondata .= $icAND[$key];
}
return $icondata;
}
function LittleEndian2String($number, $minbytes=1) {
$intstring = '';
while ($number > 0) {
$intstring = $intstring.chr($number & 255);
$number >>= 8;
}
return str_pad($intstring, $minbytes, "\x00", STR_PAD_RIGHT);
}
function GetPixelColor(&$img, $x, $y) {
if (!is_resource($img)) {
return false;
}
return @ImageColorsForIndex($img, @ImageColorAt($img, $x, $y));
}
}

$icon = new phpthumb_ico();
$gd_image_array = array($resize_im);
$icon_data = $icon->GD2ICOstring($gd_image_array);
header("Accept-Ranges: bytes");
header("Accept-Length: ".strlen($icon_data));
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=" .'favicon.ico');
echo $icon_data;
exit;
}else{
$typeinfo = "生成圖標錯誤...這張圖片或許已損毀.";
}
}
}
?>
<!DOCTYPE html>
<html lang="zh-tw">
<meta charset="utf-8">
<title>次是慶宇Favicon產生器</title>
<style>
	*:link, *:visited, *:hover, *:active, *:focus , * {
-o-transition: color .20s linear, background-color .20s linear, border-color .20s linear;
-webkit-transition: color .20s linear, background-color .20s linear, border-color .20s linear;
-moz-transition: color .20s linear, background-color .20s linear, border-color .20s linear;
transition: color .20s linear, background-color .20s linear, border-color .20s linear;
}
a:link {color:#9900ff;}
a:visited {color:#9900ff;}
a:hover {color:#ff0099;}
::selection {
background: #9900ff;
color: #fff;
}
::-moz-selection {
background: #9900ff;
color: #fff;
}
img::selection {
background: transparent;
}
img::-moz-selection {
background: transparent;
}
#Img3{
    opacity: 1.0; //設為完全不透明
    filter: alpha(opacity=100); // IE8 與更早的版本
}
#Img3:hover{
    opacity: 0.5; //透明度設為 0.5
    filter: alpha(opacity=50); // IE8 與更早的版本
}
.myButton {
	background-color:#b76fff;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #9900ff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;
	font-size:18px;
	padding:3px 11px;
	text-decoration:none;
}
.myButton:hover {
	background-color:#ff80d0;
}
.myButton:active {
	position:relative;
	top:1px;
}
.Buttonbig {
	background-color:#b76fff;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #9900ff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;
	font-size:19px;
	padding:12px 37px;
	text-decoration:none;
}
.Buttonbig:hover {
	background-color:#ff80d0;
}
.Buttonbig:active {
	position:relative;
	top:1px;
}
/* ADDITIONAL */
a.prev.page-numbers,
a.next.page-numbers,
button#bbp_topic_submit[type="submit"],
input#ws-plugin--s2member-profile-submit[type="submit"],
input#submit[type="submit"],
button#user-submit[type="submit"],
div.widget a[class*="tag-link-"],
div#comments  p.form-submit input[type="submit"],
div.widget_post_meta li.tags span,
input[type="submit"],
input[type="button"],
button,
.button{
	display: inline-block;
	line-height: 19px;
	font-size: 18px;
	padding:10px 30px 10px 30px;
	margin:0px 0px 0px 0px;
	border:1px solid #9900ff;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
        -webkit-transition: all .3s linear;
        -moz-transition: all .3s linear;
        -ms-transition: all .3s linear;
        -o-transition: all .3s linear;
font-family: Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;
}

a.next.page-numbers:hover,
a.prev.page-numbers:hover,
div.widget_post_meta li.tags span:hover,
button#bbp_topic_submit[type="submit"]:hover,
input#ws-plugin--s2member-profile-submit[type="submit"]:hover,
input#submit[type="submit"]:hover,
button#user-submit[type="submit"]:hover,
div.widget a[class*="tag-link-"]:hover,
div#comments  p.form-submit input[type="submit"]:hover,
input[type="submit"]:hover,
input[type="button"]:hover,
button:hover,
.button:hover{
	cursor: pointer;
}

button#bbp_topic_submit[type="submit"],
input#ws-plugin--s2member-profile-submit[type="submit"],
div#comments  p.form-submit input[type="submit"],
.button.large{
	font-family: Arial, Tahoma, Helvetica, FreeSans, Microsoft JhengHei, Heiti TC, TW-Kai, sans-serif;
	font-size: 12px;
	line-height: 24px;
	font-weight: 400;
	padding:13px 30px 13px 30px;
}
.button.large i{
	margin-right: 15px;
}
.button.fix{
	display: block;
	height: 35px;
	font-size: 12px;
	line-height: 12px;
	padding:10px 0px;
	width: 100%;
	text-align: center;
	text-transform: uppercase;
}
a.prev.page-numbers,
a.next.page-numbers,
div.widget_post_meta li.tags span,
div.widget a[class*="tag-link-"],
div.widget a[class*="tag-link-"],
.button.small{
	font-size: 14px !important;
	padding:5px 15px;
}

/* SKINS */
/* BLUE */
input#ws-plugin--s2member-profile-submit[type="submit"],
button#user-submit[type="submit"],
a.prev.page-numbers,
a.next.page-numbers,
div.widget a[class*="tag-link-"],
div#comments  p.form-submit input[type="submit"],
div.widget_post_meta li.tags span,
input[type="submit"],
input[type="button"],
button,
.button{
	color: #9900ff;
	background-color: #b76fff;
}

input#ws-plugin--s2member-profile-submit[type="submit"]:hover,
button#user-submit[type="submit"]:hover,
a.prev.page-numbers:hover,
a.next.page-numbers:hover,
div.widget a[class*="tag-link-"]:hover,
div#comments  p.form-submit input[type="submit"]:hover,
div.widget_post_meta li.tags span:hover,
input[type="submit"]:hover,
input[type="button"]:hover,
button:hover,
.button:hover{
	color: #ff0099;
	background-color:#ff80d0;
}
	</style>
	<p><a href="http://jochgvofd.com/free" class="Buttonbig"><img src="images/Back.gif" width="20" height="20"> 返回免費服務</a> </p>
<center><font size=5 color="#000"><h1><b><font color="#9900ff">次是慶宇</font>Favicon產生器</b><h1></font>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 尾端 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4999646866967900"
     data-ad-slot="9083437074"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<?php if($typeinfo){echo $typeinfo;}?>
<form  method="post" enctype='multipart/form-data'>
請選擇圖片：<input type="file" name="upimage" size="30"><br /> <br />支持格式：png，jpg，gif<br /><br />
目標尺寸：
<input type="radio" name="size" value="1" id="s1"><label for="s1">16*16</label>
<input type="radio" name="size" value="2" id="s2" checked><label for="s2">32*32</label>
<input type="radio" name="size" value="3" id="s3"><label for="s3">48*48</label><br /><br />
<input type="submit" value="生成Favicon圖示">
</form>
<p></p>favicon 就是出現在瀏覽器地址欄左側的那個小圖標。所謂favicon，即Favorites Icon的縮寫，中文名稱是網站頭像，顧名思義，便是其可以讓瀏覽器的收藏夾中除顯示相應的標題外，還以圖標的方式區別不同的網站。當然，這不僅僅是Favicon的全部，根據瀏覽器的不同，Favicon顯示也有所區別：在大多數主流瀏覽器如FireFox和Internet Explorer (5.5及以上版本)中，favicon不僅在收藏夾中顯示，還會同時出現在地址欄上，這時用戶可以拖曳fav​​icon到桌面以建立到網站的快捷方式；除此之外，標籤式瀏覽器​​甚至還有不少擴展的功能，如FireFox甚至支持動畫格式的favicon等。如何放置favicon？將生成的favicon.ico圖標放於網站根目錄即可。
<br />
<br />
<h3>製作風雨人多元工作室和次是慶宇工作室</h3>
	<p style="text-align: center;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 尾端 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4999646866967900"
     data-ad-slot="9083437074"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
		</script></p>
	<font size=5 color="#9900ff"><marquee direction="up" behavior="slide" bgcolor="#b76fff">
<div style="text-align: center;"><br />聯絡我們<br /><a href="mailto:jochgvofd@gmail.com"> <img src="images/taddyshen.png" /><br /><a href="https://line.me/ti/p/%40trr7250q"><img height="36" border="0" alt="好友人數" src="https://biz.line.naver.jp/line_business/img/btn/addfriends_zh-Hant.png" /></a><br /><a href="https://www.facebook.com/jochgvofdweb">Facebook粉絲團<a><br />
© 2012-2016 <a href="http://jochgvofd.com/" target="_blank">次是慶宇工作室</a> - © 2012-2016 <a href="http://wartw.com.tw" target="_blank">風雨人多元工作室</a>合作</a></a></a></div>

</marquee></font>
</form>