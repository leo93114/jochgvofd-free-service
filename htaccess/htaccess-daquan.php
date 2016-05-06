<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>.htaccess文件介紹大全 - 次是慶宇.htaccess產生器</title>
<meta name="Keywords" content=".htaccess,htaccess文件,在線,偽靜態,介紹,生成,製作" />
<meta name="Description" content="什麼是.htaccess文件從本指南中，你將可以學習到有關.htaccess文件及其功能的知識，並用以優化你的網站。儘管.htaccess 只是一個文件" / >
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
<H2 align=center>.htaccess文件說明大全</H2>
<div id="google">
<?php include"adsense.php"; ?>
</div>
<P>1.1 什麼是.htaccess文件從本指南中，你將可以學習到有關.htaccess文件及其功能的知識，並用以優化你的網站。儘管.htaccess 只是一個文件，但它可以更改服務器的設置，允許你做許多不同的事情，最流行的功能是您可以創建自定義的“404 error”頁面。 .htaccess 並不難於使用，歸根結底，它只是在一個text文檔中添加幾條簡單的指令而已。 </P>
<P>首先你要判斷主機支持它</P>
<P>這可能很難用簡單的答案來回答。許多主機支持.htaccess，但實際上並不會特別聲明，許多其他類型的主機有能力但並不允許他們的用戶使用. htaccess。一般來說，如果你的主機使用Unix或Linux系統，或任何版本的Apache網絡服務器，從理論上都是支持.htaccess的，儘管你的主機服務商可能不允許你使用它。 </P>
<P>判斷你的主機是否允許.htaccess，一個標誌很好的是它是否支持文件夾密碼保護。為達到此功能，主機服務商需要使用.htaccess（當然，少數情況下他們雖提供密碼保護功能，但卻並不允許你使用.htaccess）。如果你不確定自己的主機是否支持. htaccess，最好的辦法是上傳你自己的.htaccess文件看看是否有用，或者直接發送e-mail向你的主機服務商諮詢。 </P>
<P>Apache系統中的.htaccess文件(或者”分佈式配置文件”提供了針對目錄改變配置的方法，即，在一個特定的文檔目錄中放置一個包含一個或多個指令的文件，以作用於此目錄及其所有子目錄。作為用戶，所能使用的命令受到限制。管理員可以通過Apache的AllowOverride指令來設置。</P>
<P>子目錄中的指令會覆蓋更高級目錄或者主服務器配置文件中的指令。 </P>
<P>.htaccess必須以ASCII模式上傳，最好將其權限設置為644。 </P>
<P>.htaccess可以做大量的事情，包括：文件夾密碼保護、用戶自動重定向、自定義錯誤頁面、改變你的文件擴展名、封禁特定IP地址的用戶、只允許特定IP地址的用戶、禁止目錄列表，以及使用其他文件作為index文件。 </P>
<P>1.2 如何創建.httaccess文件創建.htaccess文件也許會給你帶來一些困難。寫文件很容易，你只需要在文字編緝器（例如：寫字板）裡寫下適當的代碼。真正困難的可能是文件的保存，因為.htaccess是一個古怪的文件名（它事實上沒有文件名，只有一個由8個字母組成的擴展名），而在一些系統（如windows 3.1）中無法接受這樣的文件名。在大多數的操作系統中，你需要做的是將文檔保存成名為：“.htaccess” （包括引號）。如果這也不行，你需要將其先命名為其它名字（例如htaccess.txt），再將其上傳到服務器上，之後直接使用FTP軟件來重命名。 </P>
<P>警告</P>
<P>在使用.htaccess之前，我必須給你一些警告。雖然在服務器上使用.htaccess絕對不太可能給你帶來任何麻煩（如果有些東西錯了，它只是沒效用罷了），但如果你使用Microsoft FrontPage Extensions，就必須特別小心。因為FrontPage Extensions本身使用了.htaccess，因此你不能編輯它並加入你自己的信息。如果確實有這方面的需要（並不推薦，但是可能），你應該先從服務器上下載.htaccess文檔（如果存在），之後在前面加上你的代碼。 </P>
<P>2|.httacces文件的配置</P>
<P>2.1.配置.htaccess 自定義錯誤頁<BR>我要介紹的.htaccess的第一個應用是自定義錯誤頁面，這將使你可以擁有自己的、個性化的錯誤頁面（例如找不到文件時），而不是你的服務商提供的錯誤頁或沒有任何頁面。這會讓你的網站在出錯的時候看上去更專業。你還可以利用腳本程序在發生錯誤的時候通知你（例如我使用Free Webmaster Help的PHP腳本程序，當找不到頁面的時候自動e-mail給我）。 </P>
<P>你所知道的任何頁面錯誤代碼（像404找不到頁面），都可以通過在.htaccess文件裡加入下面的文字將其變成自定義頁面：</P>
<P>ErrorDocument errornumber /file.html</P>
<P>舉例來說，如果我的根目錄下有一個nofound.html文件，我想使用它作為404 error的頁面：</P>
<P>ErrorDocument 404 /notfound.html</P>
<P>如果文件不在網站的根目錄下，你只需要把路徑設置為：ErrorDocument 500 /errorpages/500.html</P>
<P>以下是一些最常用的錯誤：</P>
<P>常用的客戶端請求錯誤返回代碼：</P>
<P>400 - Bad request 錯誤請求<BR>401 Authorization Required需要驗證<BR>403 Forbidden禁止<BR>404 Not Found找不到頁面<BR>405 Method Not Allowed<BR>408 Request Timed Out<BR> 411 Content Length Required<BR>412 Precondition Failed<BR>413 Request Entity Too Long<BR>414 Request URI Too Long<BR>415 Unsupported Media Type</P>
<P>常見的服務器錯誤返回代碼：</P>
<P>500 Internal Server Error內部服務器錯誤</P>
<P>接下來，你要做的只是創建一個錯誤發生時顯示的文件，然後把它們和.htaccess一起上傳。 </P>
<P>用戶可以利用.htaccess指定自己事先製作好的錯誤提醒頁面。一般情況下，人們可以專門設立一個目錄，例如errors放置這些頁面。然後再.htaccess中，加入如下的指令：</P>
<P>ErrorDocument 404 /errors/notfound.html<BR>ErrorDocument 500 /errors/internalerror.html</P>
<P>一條指令一行。上述第一條指令的意思是對於404，也就是沒有找到所需要的文檔的時候得顯示頁面為/errors目錄下的notfound.html頁面。不難看出語法格式為：</P>
<P>ErrorDocument 錯誤代碼/目錄名/文件名.擴展名</P>
<P>如果所需要提示的信息很少的話，不必專門製作頁面，直接在指令中使用HTML號了，例如下面這個例子：</P>
<P>ErrorDocument 401 “你沒有權限訪問該頁面，請放棄！”</P>
<P>2.2.配置.htaccess 停示顯示目錄列表<BR>有些時候，由於某種原因，你的目錄裡沒有index文件，這意味著當有人在瀏覽器地址欄鍵入了該目錄的路徑，該目錄下所有的文件都會顯示出來，這會給你的網站留下安全隱患。 </P>
<P>為避免這種情況（而不必創建一堆的新index文件），你可以在你的.htaccess文檔中鍵入以下命令，用以阻止目錄列表的顯示： Options -Indexes</P>
<P>2.3.配置.htaccess 阻止/允許特定的IP地址某些情況下，你可能只想允許某些特定IP的用戶可以訪問你的網站（例如：只允許使用特定ISP的用戶進入某個目錄），或者想封禁某些特定的IP地址（例如：將低級用戶隔離於你的信息版面外）。當然，這只在你知道你想攔截的IP地址時才有用，然而現在網上的大多數用戶都使用動態IP地址，所以這並不是限制使用的常用方法。 </P>
<P>你可以使用以下命令封禁一個IP地址：</P>
<P>deny from 000.000.000.000</P>
<P>這裡的000.000.000.000是被封禁的IP地址，如果你只指明了其中的幾個，則可以封禁整個網段的地址。如你輸入210.10.56.，則將封禁210.10.56.0～210.10.56.255的所有IP地址。 </P>
<P>你可以使用以下命令允許一個IP地址訪問網站：</P>
<P>allow from 000.000.000.000</P>
<P>被允許的IP地址則為000.000.000.000，你可以像封禁IP地址一樣封禁整個網段。 </P>
<P>如果你想阻止所有人訪問該目錄，則可以使用：</P>
<P>deny from all</P>
<P>不過這並不影響腳本程序使用這個目錄下的文檔。 </P>
<P>2.4.配置.htaccess 替換index文件<BR>改變缺省的首頁文件</P>
<P>一般情況下缺省的首頁文件名有default、index等。不過，有些時候目錄中沒有缺省文件，而是某個特定的文件名，比如在w3sky中是w3sky.PHP。這種情況下，要用戶記住文件名來訪問很麻煩。在.htaccess中可以輕易的設置新的缺省文件名：</P>
<P>DirectoryIndex 新的缺省文件名</P>
<P>也可以列出多個，順序表明它們之間的優先級別，例如：</P>
<P>DirectoryIndex filename.html index.cgi index.pl default.htm</P>
<P>也許你不想一直使用index.htm或index.html作為目錄的索引文件。舉例來說，如果你的站點使用PHP 文件，你可能會想使用index.PHP來作為該目錄的索引文檔。當然也不必局限於“index”文檔，如果你願意，使用.htaccess你甚至能夠設置foofoo.balh來作為你的索引文檔這些互為替換的索引文件可以排成一個列表，服務器會從左至右進行尋找，檢查哪個文檔在真實的目錄中存在。如果一個也找不到，它將會把目錄列表顯示出來（除非你已經關閉了顯示目錄文件列表）。 </P>
<P>DirectoryIndex index.PHP index.PHP3 messagebrd.pl index.html index.htm</P>
<P>2.5.配置.htaccess 重定向頁面<BR>.htaccess最有用的功能之一就是將請求重定向到同站內或站外的不同文檔。這在你改變了一個文件名稱，但仍然想讓用戶用舊地址訪問到它時，變的極為有用。另一個應用（我發現的很有用的）是重定向到一個長URL，例如在我的時事通訊中，我可以使用一個很簡短的URL 來指向我的會員鏈接。以下是一個重定向文件的例子：</P>
<P>Redirect /location/from/root/file.ext<BR>http://www.w3sky.com/new/file/123.html</P>
<P>上述例子中，訪問在root目錄下的名為oldfile.html可以鍵入：</P>
<P>/oldfile.html</P>
<P>訪問一個舊次級目錄中的文件可以鍵入：</P>
<P>/old/oldfile.html</P>
<P>你也可以使用.htaccess重定向整個網站的目錄。假如你的網站上有一個名為olddirectory的目錄，並且你已經在一個新網站http://www.w3sky.com/newdirectory/上建立了與上相同的文檔，你可以將舊目錄下所有的文件做一次重定向而不必一一聲明：</P>
<P>Redirect /olddirectory http://www.w3sky.com/newdirectory</P>
<P>這樣，任何指向到站點中/olddirectory目錄的請求都將被重新指向新的站點，包括附加的額外URL信息。如果正確使用，此功能將極其強大。 </P>
<P>我們可能對網站進行重新規劃，將文檔進行了遷移，或者更改了目錄。這時候，來自搜索引擎或者其他網站鏈接過來的訪問就可能出錯。這種情況下，可以通過如下指令來完成舊的URL自動轉向到新的地址：</P>
<P>Redirect /舊目錄/舊文檔名新文檔的地址</P>
<P>或者整個目錄的轉向：</P>
<P>Redirect 舊目錄 新目錄</P>
<P>3.1.密碼保護的.htaccess文件儘管有各種各樣的.htaccess用法，但至今最流行的也可能是最有用的做法是將其用於網站目錄可靠的密碼保護。儘管JavaScrip等也能做到，但只有.htaccess具有完美的安全性（即訪問者必須知曉密碼才可以訪問目錄，並且絕無“後門”可走）。 </P>
<P>利用.htaccess將一個目錄加上密碼保護分兩個步驟。第一步是在你的.htaccess文檔裡加上適當的幾行代碼，再將.htaccess文檔放進你要保護的目錄下：</P>
<P>AuthName “Section Name”<BR>AuthType Basic<BR>AuthUserFile /full/path/to/.htpasswd<BR>Require valid-user</P>
<P>你可能需要根據你的網站情況修改一下上述內容中的一些部分，如用被保護部分的名字”Members Area”，替換掉“Section Name”。 </P>
<P>/full/parth/to/.htpasswd則應該替換為指向.htpasswd文件（後面詳述該文檔）的完整服務器路徑。如果你不知道你網站空間的完整路徑，請詢問一下你的系統管理員。 </P>
<P>3.2.密碼保護的.htpasswd文件<BR>目錄的密碼保護比.htaccess的其他功能要麻煩些，因為你必須同時創建一個包含用戶名和密碼的文檔，用於訪問你的網站，相關信息（默認）位於一個名為.htpasswd的文檔裡。像.htaccess一樣，.htpasswd也是一個沒有文件名且具有8位擴展名的文檔，可以放置在你網站裡的任何地方（此時密碼應加密），但建議你將其保存在網站Web根目錄外，這樣通過網絡就無法訪問到它了。 </P>
<P>在使用.htaccess來設置目錄的密碼保護時，它包含了密碼文件的路徑。從安全考慮，有必要把.htaccess 也保護起來，不讓別人看到其中的內容。雖然可以用其他方式做到這點，比如文檔的權限。不過，.htaccess本身也能做到，只需加入如下的指令：</P>
<P>order allow,deny<BR>deny from all</P>
<P>3.3.配置.htaccess 輸入用戶名和密碼<BR>要利用.htaccess對某個目錄下的文檔設定訪問用戶和對應的密碼，首先要做的是生成一個.htpasswd的文本文檔，例如： </P>
<P>forge:y4E7Ec8e7EwV</P>
<P>這裡密碼經過加密，用戶可以自己找些工具將密碼加密成.htaccess支持的編碼。該文檔最好不要放在www目錄下，建議放在www根目錄文檔之外，這樣更為安全些。 </P>
<P>有了授權用戶文檔，可以在.htaccess中加入如下指令了：</P>
<P>AuthUserFile .htpasswd的服務器目錄<BR>AuthGroupFile /dev/null （需要授權訪問的目錄）<BR>AuthName EnterPassword<BR>AuthType Basic （授權類型）</P>
<P>require user wsabstract （允許訪問的用戶，如果希望表中所有用戶都允許，可以使用require valid-user）</P>
<P>注，括號部分為學習時候自己添加的註釋</P>
<P>拒絕來自某個IP的訪問</P>
<P>如果我不想某個政府部門訪問到我的站點的內容，那可以通過.htaccess中加入該部門的IP而將它們拒絕在外。 </P>
<P>例如：<BR>order allow,deny<BR>deny from 210.10.56.32<BR>deny from 219.5.45.<BR>allow from all</P>
<P>第二行拒絕某個IP，第三行拒絕某個IP段，也就是219.5.45.0~219.2.45.255</P>
<P>想要拒絕所有人？用deny from all好了。不止用IP，也可以用域名來設定。 </P>
<P>創建好.htpasswd文檔後（可以通過文字編輯器創建），下一步是輸入用於訪問網站的用戶名和密碼，應為：</P>
<P>username:password</P>
<P>“password”的位置應該是加密過的密碼。你可以通過幾種方法來得到加密過的密碼：一是使用一個網上提供的permade腳本或自己寫一個；另一個很不錯的username/password加密服務是通過KxS網站，這裡允許你輸入用戶名及密碼，然後生成正確格式的密碼。 </P>
<P>對於多用戶，你只需要在.htpasswd文檔中新增同樣格式的一行即可。另外還有一些免費的腳本程序可以方便地管理.htpasswd文檔，可以自動新增/移除用戶等。 </P>
<P>3.4.配置.htaccess 直接訪問加密網站<BR>當你試圖訪問被.htaccess密碼保護的目錄時，你的瀏覽器會彈出標準的username/password對話窗口。如果你不喜歡這種方式，有些腳本程序可以允許你在頁面內嵌入username/password輸入框來進行認證，你也可以在瀏覽器的URL框內以以下方式輸入用戶名和密碼（未加密的）： <BR>http://username:password@www.w3sky.com/directory/</P>
<P>3.5.利用.htaccess 防止盜鏈<BR>如果不喜歡別人在他們的網頁上連接自己的圖片、文檔的話，也可以通過htaccess的指令來做到。 </P>
<P>所需要的指令如下：</P>
<P>RewriteEngine on<BR>RewriteCond %{ HTTP_REFERER } !^$<BR>RewriteCond %{ HTTP_REFERER } !^http://(www.)?w3sky.com/.*$ [NC]<BR>RewriteRule . (gif &amp;line;jpg)$ - [F]</P>
<P>如果覺得讓別人的頁面開個天窗不好看，那可以用一張圖片來代替：</P>
<P>RewriteEngine on<BR>RewriteCond %{ HTTP_REFERER } !^$<BR>RewriteCond %{ HTTP_REFERER } !^http://(www.)?w3sky.com/.*$ [NC]<BR>RewriteRule . (gif &amp;line;jpg)$ http://www.w3sky.com/替代圖片文件名[R,L]</P>
<P>3.6.利用.htaccess進行地址轉向<BR>這種方法，就是把yourdomain.com的流量全部301轉向到www.yourdomain.com(或者反過來)。其實對於這種方法，國外有人認為對PageRank沒有幫助。我覺得是因為他們看到Google管理員工具中有一個首選域工具，可以指定Google的爬蟲把www.yourdomain.com或者yourdomain.com作為抓取和排名的首選域，轉向似乎就沒有必要了。但確實又有不少人證實這是有效的，反正目前還沒有人說這種方法會對SEO或者pagerank有什麼損害。 </P>
<P>在.htaccess中寫入:</P>
<P>Options +FollowSymlinks All -Indexes<BR>rewriteEngine on<BR>rewriteBase /<BR>RewriteCond %{HTTP_HOST} ^domain.com$<BR>RewriteRule ^(.*)$ http://www.domain. com/$1 [R=301,L]</P>
<P>3.7.利用.htaccess對域名中“www”的控制<BR>強制去除3w</P>
<P>下面以Wordpress 為例，其它的情況，可以自己參照解決。在你的Wordpress 目錄下通常會有一個.htaccess 文件，如果沒有，那就手動建立一個。如果你設定了permalink 的話，.htaccess 裡面的內容會有如下一坨：</P>
<P>&lt;IfModule mod_rewrite.c&gt;<BR>RewriteEngine On<BR>RewriteBase /<BR>RewriteCond %{REQUEST_FILENAME} !-f<BR>RewriteCond %{REQUEST_FILENAME} !-d<BR>RewriteRule . /index. php [L]<BR>&lt;/IfModule&gt;<BR>具體是啥意思咱就甭管它了，只管在RewriteBase / 這行下面加上：</P>
<P>RewriteCond %{HTTP_HOST} ^www.yourdomain.tld$ [NC]<BR>RewriteRule ^(.*)$ http://yourdomain.tld/$1 [R=301,L]</P>
<P>這樣就大功告成了。當然要把yourdomain.tld 換成你自己的域名。上面兩行的意思是把www.yourdomain.tld 這種形式改寫成yourdomain.tld, 並把訪問前者的所有鏈接永久轉向到後者。 </P>
<P>域名前強制加上www</P>
<P>如果你實在是堅持要把www 加在前面，我上面的算是白寫了，表示遺憾。但，你可以。只需把上面添加的兩行代碼改成這樣：</P>
<P>RewriteCond %{HTTP_HOST} ^yourdomain.tld$ [NC]<BR>RewriteRule ^(.*)$ http://www.yourdomain.tld/$1 [R=301,L]</P>
<P>4.1. .htaccess 總結<BR>.htaccess是一個站點管理員可以應用的強大工具，有更多的變化以適應不同的用途，可以節約時間及提高網站的安全性</P>
<P>.htaccess的特別說明</P>
<P>* 啟用.htaccess，需要修改httpd.conf，啟用AllowOverride，並可以用AllowOverride限制特定命令的使用<BR>* 如果需要使用.htaccess以外的其他文件名，可以用AccessFileName指令來改變。例如，需要使用.config ，則可以在服務器配置文件中按以下方法配置：</P>
<P>AccessFileName .config</P>
<P>* 一般情況下，不應該使用. htaccess文件，除非你對主配置文件沒有訪問權限。有一種很常見的誤解，認為用戶認證只能通過.htaccess文件實現，其實並不是這樣，把用戶認證寫在主配置文件中是完全可行的，而且是一種很好的方法。 .htaccess文件應該被用在內容提供者需要針對特定目錄改變服務器的配置而又沒有root權限的情況下。如果服務器管理員不願意頻繁修改配置，則可以允許用戶通過.htaccess文件自己修改配置，尤其是ISP在同一個機器上運行了多個用戶站點，而又希望用戶可以自己改變配置的情況下。雖然如此，一般都應該盡可能地避免使用.htaccess文件。任何希望放在.htaccess文件中的配置，都可以放在主配置文件的&lt;Directory&gt;段中，而且更高效。避免使用.htaccess文件有兩個主要原因，即性能和安全。 </P>
<P>在線.htaccess文件生成器http://cooletips.de/htaccess/<BR>能夠在線生成. htaccess文件，很簡單的就配置重定向,系統錯誤文件等。 <BR>敢想敢做敢堅持</P>
<P>.htaccess文件提供了針對每個目錄改變配置的方法。 <BR>top<BR>.htaccess文件*<BR>相關模塊相關指令</P>
<P>*core<BR>*mod_authn_file<BR>*mod_authz_groupfile<BR>*mod_cgi<BR>*mod_include<BR>*mod_mime</P>
<P>*AccessFileName<BR>*AllowOverride<BR>*Options<BR>*AddHandler<BR>*SetHandler<BR>*AuthType<BR>*AuthName<BR>*AuthUserFile<BR>*AuthGroupFile<BR>*Require </P>
<P>top<BR>工作原理和使用方法*</P>
<P>.htaccess文件(或者”分佈式配置文件”)提供了針對目錄改變配置的方法，即，在一個特定的文檔目錄中放置一個包含一個或多個指令的文件，以作用於此目錄及其所有子目錄。 </P>
<P>說明：如果需要使用.htaccess以外的其他文件名，可以用AccessFileName指令來改變。例如，需要使用.config，則可以在服務器配置文件中按以下方法配置：</P>
<P>AccessFileName.config</P>
<P>允許放在這些文件中的指令取決於AllowOverride指令，此指令按類別決定了.htaccess文件中哪些指令才是有效的。如果一個指令允許放在.htaccess文件中，則，在本手冊的說明中，此指令會有一個覆蓋段，其中說明了為使此指令生效而必須在AllowOverride指令中設置的值。 </P>
<P>例如，本手冊對AddDefaultCharset指令的說明表明了，此指令可以用於.htaccess文件(見Context一行)，而Override一行是”FileInfo”，那麼為使.htaccess中的此指令有效，則至少要設置”AllowOverrideFileInfo”。 </P>
<P>例子:<BR>Context:serverconfig,virtualhost,directory,.htaccess<BR>Override:FileInfo</P>
<P>如果不能確定一個特定的指令是否允許用於.htaccess文件，可以查閱手冊中對指令的說明，看在Context(“上下文”)行中是否有”.htaccess.”。 </P>
<P>使用.htaccess文件的場合</P>
<P>一般情況下，不應該使用.htaccess文件，除非你對主服務器配置文件沒有存取權限。有一種很常見的誤解，認為用戶認證只能通過.htaccess文件實現，但並不是這樣，把用戶認證寫在主服務器配置中是完全可行的，而且是一種很好的方法。 </P>
<P>在內容提供者需要針對目錄改變服務器的配置而對服務器系統沒有root權限時，則應該使用.htaccess文件。如果服務器管理員不願意頻繁修改配置，則可以允許用戶通過.htaccess文件自己修改配置，尤其是ISP在一個機器上宿主多個用戶站點，而又希望用戶可以自己改變配置的情況下。 </P>
<P>雖然如此，一般都應該盡可能地避免使用.htaccess文件。任何希望放在.htaccess文件中的配置，都可以放在主服務器的&amp;lt;Directory&amp;gt;段中，而且更高效。 </P>
<P>避免使用.htaccess文件有兩個主要原因。 </P>
<P>首先是性能。如果AllowOverride允許使用.htaccess文件，則，Apache需要在每個目錄中查找.htaccess因此，無論是否真正用到，允許使用.htaccess文件都會導致性能的下降。另外，每次請求一個頁面時，都需要讀取.htaccess文件。 </P>
<P>還有，Apache必須在所有更高級的目錄中查找.htaccess文件，使所有有效的指令都起作用(參見howdirectivesareapplied.)，所以，如果有對/www/htdocs/example中頁面的請求， Apache必須查找以下文件：</P>
<P>/.htaccess<BR>/www/.htaccess<BR>/www/htdocs/.htaccess<BR>/www/htdocs/example/.htaccess</P>
<P>而且，對此目錄以外的每個文件訪問，還有4個附加的文件系統訪問，即使這些文件都不存在。 (注意，這可能僅僅發生在/允許使用.htaccess文件的情況下，雖然這種情況並不多。)</P>
<P>其次是安全。如此，會允許用戶修改服務器的配置，可能會導致未加限制的修改，請認真考慮是否給予用戶這樣的特權。但是，如果給予用戶較少的特權而不能滿足其需要，則會帶來額外的技術支持請求，所以，必須明確地告訴用戶已經給予他們的權限，說明AllowOverride設置的值，並引導他們參閱相應的說明，以免日後許多麻煩。 </P>
<P>注意，在/www/htdocs/example目錄下.htaccess文件中放置指令，與，在主服務器配置文件中&amp;lt;Directory/www/htdocs/example&amp;gt;段中放置相同指令，是等效的。 ：</P>
<P>/www/htdocs/example中的.htaccess:</P>
<P>/www/htdocs/example中.htaccess文件的內容<BR>AddTypetext/example.exm</P>
<P>httpd.conf文件中的段<BR>&amp;lt;Directory/www/htdocs/example&amp;gt;<BR>AddType</P>
<P>text/example.exm<BR>&amp;lt;/Directory&amp;gt;</P>
<P>但是，把這個配置放置在服務器配置文件中則更加高效，因為只需要在Apache啟動時讀取一次，而不是在有文件請求時每次都讀取。 </P>
<P>將AllowOverride設置為”none”可以完全禁止使用.htaccess文件。 </P>
<P>AllowOverrideNone</P>
<P>指令的生效</P>
<P>.htaccess文件中的配置指令作用於.htaccess文件所在的目錄及其所有子目錄，但是，很重要需要記住的是，其更高級的目錄也可能會有.htaccess文件，而指令是按查找順序依次生效，所以，一個特定目錄下的.htaccess文件中的指令可能會覆蓋其更高級目錄中的.htaccess文件的指令，即，子目錄中的指令會覆蓋更高級目錄或者主服務器配置文件中的指令。 </P>
<P>例如:目錄/www/htdocs/example1中的.htaccess文件有如下內容：</P>
<P>Options+ExecCGI</P>
<P>(注意:必須設置”AllowOverrideOptions”以允許在.htaccess文件中使用”Options”指令。)</P>
<P>在目錄/www/htdocs/example1/example2中的.htaccess文件有如下內容：</P>
<P>OptionsIncludes</P>
<P>由於第二個.htaccess文件的存在，/www/htdocs/example1/example2中的CGI執行是不允許的，而只允許OptionsIncludes，它完全覆蓋了之前的設置。 </P>
<P>認證舉例</P>
<P>如果你為了知道如何認證，直接從這裡開始看，有很重要的一點需要注意，有一種常見的誤解，認為實現密碼認證必須要使用.htaccess文件，其實不是這樣。把認證指令放在主服務器配置文件的&amp;lt;Directory&amp;gt;段中是一個更好的方法，而.htaccess文件應該僅僅用於無權訪問主服務器配置文件的時候。參見上述的使用.htaccess文件的場合。 </P>
<P>有此聲明在先，如果你仍然需要使用.htaccess文件，請看以下說明。 </P>
<P>必須設置”AllowOverrideAuthConfig”以允許這些指令生效</P>
<P>.htaccess文件的內容:</P>
<P>AuthTypeBasic<BR>AuthName”PasswordRequired”<BR>AuthUserFile/www/passwords/password.file<BR>AuthGroupFile/www/passwords/group.file<BR>RequireGroupadmins</P>
<P>注意，必須設置AllowOverrideAuthConfig以允許這些指令生效</P>
<P>更詳細的有關身份識別和認證的說明，請參見authenticationtutorial。 </P>
<P>服務器端包含舉例</P>
<P>.htaccess文件的另一個常見用途是允許一個特定目錄的服務器端包含(ServerSideIncludes)，可以在需要的目錄中放置.htaccess文件，並如下配置：</P>
<P>Options+Includes<BR>AddTypetext/htmlshtml<BR>AddHandlerserver-parsedshtml</P>
<P>注意，必須同時設置AllowOverrideOptions和AllowOverrideFileInfo使這些指令生效。 </P>
<P>更詳細的有關服務器端包含的說明，請參見SSItutorial。 </P>
<P>CGI舉例</P>
<P>最後，可以通過.htaccess文件允許在特定目錄中執行CGI程序，需按如下配置：</P>
<P>Options+ExecCGI<BR>AddHandlercgi-scriptcgipl</P>
<P>另外，如下，可以使給定目錄下所有文件被視為CGI程序：</P>
<P>Options+ExecCGI<BR>SetHandlercgi-script</P>
<P>注意，必須設置AllowOverrideOptions使這些指令生效。 </P>
<P>更詳細的有關CGI編程和配置的說明，請參見CGItutorial。 </P>
<P>疑難解答</P>
<P>如果在.htaccess文件中寫入了配置指令但不起作用，可能有多種原因。 </P>
<P>最常見的原因是，AllowOverride指令沒有被正確設置，必須確保沒有對此文件區域設置AllowOverrideNone。有一個很好的測試方法，即，在.htaccess文件隨便增加點沒用的內容，如果服務器沒有返回了一個錯誤消息，那麼幾乎可以斷定設置了AllowOverrideNone。 </P>
<P>在訪問文檔時，如果收到服務器的出錯消息，應該檢查Apache的出錯日誌，可以知道.htaccess文件中哪些指令是不允許使用的，也可能會發現需要糾正的語法錯誤。 </P>
 </div>
<!--wrapperAll--> 
<div id="footer">
<?php include"footer.php"; ?>
</div><!--footer-->
</body>
</html>