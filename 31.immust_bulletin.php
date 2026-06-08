<html> <head> <title>明新科技大學資訊管理系</title> <meta charset="utf-8"> <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet"> <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script> <script> $(window).load(function() { // 當整個網頁（包含所有圖片等資源）都載入完成後，才執行裡面的程式碼
            $('.flexslider').flexslider({ // 使用 jQuery 選取 class 為 flexslider 的元素，並啟動 flexslider 輪播圖功能
                animation: "slide", // 設定輪播圖的換頁動畫效果為「滑動 (slide)」
                rtl: true // 設定輪播圖的滑動方向為由右至左 (Right to Left)
            }); // 結束 flexslider 的屬性設定
        }); // 結束 window.load 事件函式
    </script> <style> *{ /* 星號代表「全域選擇器」，這裡的設定會套用到網頁中所有的 HTML 標籤 */
            margin:0; /* 將所有標籤預設的外圍邊距 (margin) 歸零，方便後續自行排版 */
            color:gray; /* 將所有文字的預設顏色設定為灰色 */
            text-align:center; /* 將所有文字的預設對齊方式設定為置中對齊 */
        } /* 結束全域設定 */
        /* top */ /* 以下是頂部區塊的樣式設定 */
        .top{ /* 選取 class 為 top 的元素 */
             background-color: white; /* 設定頂部區塊的背景顏色為白色 */
        } /* 結束 .top 設定 */
        .top .container{ /* 選取 .top 區塊內 class 為 container 的元素 */
            display: flex; /* 啟用 Flexbox 彈性盒子排版模型，讓內部元素可以水平排列 */
            align-items: center; /* 讓 Flexbox 內的元素在垂直方向上置中對齊 */
            justify-content: space-between; /* 讓 Flexbox 內的元素在水平方向上均勻分散對齊（靠左與靠右排列） */
            padding:10px; /* 設定區塊的內邊距為 10 像素，讓內容不會太貼緊邊緣 */
        } /* 結束 .top .container 設定 */
        .top .logo{ /* 選取 .top 區塊內 class 為 logo 的元素 */
            /*border:1px solid red;*/ /* 這是被註解掉的測試用紅色邊框，不會發生作用 */
            font-size: 35px; /* 設定 Logo 區塊的文字大小為 35 像素 */
            font-weight: bold; /* 設定 Logo 區塊的文字為粗體 */
        } /* 結束 .top .logo 設定 */
        .top .logo img{ /* 選取 Logo 區塊內的 img (圖片) 元素 */
            width: 100px; /* 設定 Logo 圖片的寬度為 100 像素 */
            vertical-align: middle; /* 設定圖片與旁邊的文字在垂直方向上呈現置中對齊 */
        } /* 結束 .top .logo img 設定 */
        .top .top-nav{ /* 選取頂部區塊內的 top-nav (導覽列) 元素 */
            /*border:1px solid red;*/ /* 同樣是被註解掉的測試用邊框 */
            font-size: 25px; /* 設定頂部導覽列的文字大小為 25 像素 */
            font-weight: bold; /* 設定頂部導覽列的文字為粗體 */       
        } /* 結束 .top .top-nav 設定 */
        .top .top-nav a{ /* 選取頂部導覽列內的 a (超連結) 元素 */
            text-decoration: none; /* 移除超連結預設的底部底線 */
        } /* 結束 .top .top-nav a 設定 */
        /* nav */ /* 以下是主導覽列區塊的樣式設定 */
        .nav { /* 選取 class 為 nav 的主導覽列元素 */
            background-color:#333; /* 設定主導覽列的背景顏色為深灰色 (#333) */
            display: flex; /* 再次使用 Flexbox 彈性排版 */
            justify-content: center; /* 讓導覽列內的項目在水平方向上置中對齊 */
        } /* 結束 .nav 設定 */
        .nav ul { /* 選取導覽列內的 ul (無序列表) 元素 */
            list-style-type: none; /* 移除列表項目預設的黑點符號 */  
            margin: 0; /* 將列表的外邊距歸零 */ 
            padding: 0; /* 將列表的內邊距歸零 */ 
            overflow: hidden; /* 隱藏超出範圍的內容，常用來解決浮動 (float) 排版的高度坍塌問題 */ 
            background-color: #333; /* 設定列表背景顏色為深灰色 */ 
        } /* 結束 .nav ul 設定 */
        .nav li { /* 選取導覽列內的 li (列表項目) 元素 */
            float: left; /* 讓列表項目向左浮動，使其能夠水平並排顯示 */ 
        } /* 結束 .nav li 設定 */
        .nav li a { /* 選取導覽列內的 a (超連結) 元素 */   
            display: block; /* 將行內元素轉換為區塊元素，讓超連結的點擊範圍變大 */  
            color: white; /* 設定導覽列超連結的文字顏色為白色 */  
            text-align: center; /* 設定文字置中對齊 */  
            padding: 14px 16px; /* 設定上下內邊距為 14 像素，左右內邊距為 16 像素，撐開點擊按鈕的空間 */  
            text-decoration: none; /* 移除超連結預設的底部底線 */  
        } /* 結束 .nav li a 設定 */
        .nav li a:hover { /* 設定當滑鼠游標懸停 (hover) 在超連結上時的狀態 */
            background-color: #111; /* 滑鼠懸停時，將背景顏色變更為更深的黑色 (#111) */ 
        } /* 結束 .nav li a:hover 設定 */
        /*下拉式選單*/ /* 以下是下拉式選單的特效設定 */
        .dropdown:hover .dropdown-content { /* 當滑鼠懸停在包含 .dropdown 的元素上時，對其內部的 .dropdown-content 執行樣式改變 */
            display: block; /* 將原本隱藏的選單改為區塊元素 (block) 顯示出來，呈現上下排列 */
        } /* 結束下拉顯示設定 */
        li.dropdown:hover{ /* 當滑鼠懸停在帶有 dropdown class 的列表項目上時 */
            background-color: #333; /* 保持其背景顏色為深灰色，避免跑版 */
        } /* 結束下拉母選單懸停設定 */
        .dropdown-content { /* 設定下拉選單 (.dropdown-content) 本身的內容格式 */
            display: none; /* 預設為隱藏狀態 (none)，平常看不到 */
            position: absolute; /* 設定絕對定位，使其可以脫離原本的排版流，浮動在畫面上方 */
            background-color: #333; /* 設定下拉選單的背景顏色為深灰色 */
            min-width: 160px; /* 設定下拉選單的最小寬度為 160 像素 */
            z-index: 1; /* 設定層級為 1，確保下拉選單會覆蓋在下方內容的上面，不會被擋住 */
        } /* 結束 .dropdown-content 設定 */
        .dropdown-content a { /* 設定下拉選單內的超連結格式 */
            color: black; /* 設定下拉選單內的文字顏色為黑色 */
            padding: 12px 16px; /* 設定選單內按鈕的上下內邊距為 12 像素，左右為 16 像素 */
            text-decoration: none; /* 移除選單內超連結的底部底線 */
            display: block; /* 讓超連結變成區塊，讓整行都可以點擊 */
            text-align: left; /* 讓選單內的文字靠左對齊 */
        } /* 結束 .dropdown-content a 設定 */

        /* slider */ /* 以下是輪播圖外層區塊的設定 */
        .slider{ /* 選取 class 為 slider 的元素 */
            background-color: black; /* 設定輪播圖外圍的背景顏色為黑色 */
        } /* 結束 .slider 設定 */
        /* banner*/ /* 以下是系所簡介橫幅區塊的設定 */
        .banner{ /* 選取 class 為 banner 的元素 */
            background-image: linear-gradient(#ABDCFF,#0396FF); /* 使用 CSS 漸層語法，設定背景顏色從淺藍過渡到深藍 */
            padding:30px; /* 設定橫幅的內邊距為 30 像素，增加高度 */
        } /* 結束 .banner 設定 */
        .banner h1{ /* 選取橫幅內的 h1 (大標題) 元素 */
            padding: 20px; /* 設定大標題的內邊距為 20 像素，讓每行文字之間有呼吸空間 */
        } /* 結束 .banner h1 設定 */       
        /*faculty*/ /* 以下是師資介紹區塊的設定 */
        .faculty { /* 選取 class 為 faculty 的元素 */
            display: block; /* 設定為區塊顯示模式 */
            justify-content: center; /* 雖然設了 block，這行屬性通常用於 flex，在此影響不大 */
            background-color:white; /* 設定師資介紹區塊的背景為白色 */
            padding:40px; /* 設定內邊距為 40 像素 */
        } /* 結束 .faculty 設定 */
        .faculty h2 { /* 選取師資區塊內的 h2 (副標題) 元素 */
            font-size: 25px; /* 設定副標題文字大小為 25 像素 */
            color: rgb(50,51,52); /* 設定文字顏色為深灰黑色 */
            padding-bottom:40px; /* 設定標題下方的內邊距為 40 像素，與下方圖片拉開距離 */
        } /* 結束 .faculty h2 設定 */
        .faculty .container { /* 選取師資區塊內用來裝老師卡片的容器 */
            /*border:1px solid red;*/ /* 被註解掉的測試用邊框 */
            display: flex; /* 啟用 Flexbox 排版，讓老師卡片可以水平並列 */
            justify-content: space-around; /* 讓裡面的老師卡片水平分散，且兩側留有均勻的空白 */
            align-items: center; /* 讓老師卡片在垂直方向上置中對齊 */
        } /* 結束 .faculty .container 設定 */
        .faculty .teacher{ /* 選取每位老師專屬的卡片超連結區塊 */
            /*border:1px solid blue;*/ /* 被註解掉的測試用邊框 */
            display:block; /* 讓 a 標籤轉為區塊元素，包含裡面的圖片與文字 */
            text-decoration: none; /* 移除超連結的預設底線 */
        } /* 結束 .faculty .teacher 設定 */
        .faculty .teacher img{ /* 選取老師卡片內的圖片 */
            height: 200px; /* 固定老師大頭照的高度為 200 像素 */
            width: 200px; /* 固定老師大頭照的寬度為 200 像素，確保圖片呈正方形 */
        } /* 結束 .faculty .teacher img 設定 */
        .faculty .teacher h3{ /* 選取老師卡片內的 h3 (老師名字) 元素 */
            color: White; /* 設定老師名字的文字顏色為白色 */
            background-color: rgba(39,40,34,.500); /* 設定半透明的黑灰色背景 (Alpha 透明度為 0.5) 襯托白色文字 */
            text-align: center; /* 設定老師名字置中對齊 */           
        } /* 結束 .faculty .teacher h3 設定 */
        /*contact*/ /* 以下是相關資訊 (聯絡方式) 區塊的設定 */
        .contact { /* 選取 class 為 contact 的元素 */
            display: block; /* 設定為區塊顯示模式 */
            justify-content: center; /* 此屬性在此處影響不大 */
            margin-top: 30px; /* 設定區塊與上方元素的距離為 30 像素 */
            margin-bottom: 30px; /* 設定區塊與下方元素的距離為 30 像素 */               
        } /* 結束 .contact 設定 */
        .contact h2{ /* 選取聯絡資訊區塊內的 h2 (副標題) 元素 */
            color: rgb(54, 82, 110); /* 設定文字顏色為深藍灰色 */
            font-size: 25px; /* 設定標題大小為 25 像素 */
        } /* 結束 .contact h2 設定 */
        .contact .infos{ /* 選取包裝聯絡細節與地圖的容器 */
            display:flex; /* 啟用 Flexbox 排版，讓左邊文字與右邊地圖水平並列 */
            margin-top: 30px; /* 與上方標題拉開 30 像素的距離 */
            justify-content: center; /* 讓內部資訊區塊整體置中對齊 */
        } /* 結束 .contact .infos 設定 */
        .contact .infos .left{ /* 選取資訊區塊的左半部 (文字資訊) */
            display:block; /* 設定為區塊顯示模式 */
            text-align: left; /* 確保內部的地址與電話文字都靠左對齊 */
            margin-right: 30px; /* 設定右側外圍邊距為 30 像素，與右邊的地圖拉開距離 */
        } /* 結束 .contact .infos .left 設定 */
        .contact .infos .left b{ /* 選取左半部的 b (粗體標籤，通常用於欄位標題) 元素 */
            display:block; /* 讓每個粗體標籤都自己佔滿一行 */
            text-align: left; /* 確保文字靠左對齊 */
            margin-top: 10px; /* 與上方文字拉開 10 像素距離 */
            text-decoration: bold; /* CSS中沒有此語法(應為font-weight)，但因使用了 b 標籤本身就是粗體 */
            color: Gray; /* 設定文字顏色為灰色 */
            font-size: 18px; /* 設定文字大小為 18 像素 */
            line-height: 18px; /* 設定行高為 18 像素 */
        } /* 結束 .contact .infos .left b 設定 */
        .contact .infos .left span{ /* 選取左半部的 span (一般文字標籤，通常用於詳細內容) 元素 */
            display:block; /* 讓詳細內容也自己佔滿一行 */
            text-align: left; /* 確保內容靠左對齊 */
            margin-top: 10px; /* 與上方的標題拉開 10 像素距離 */
            color: rgba(39,40,34,0.5); /* 設定文字顏色為半透明的黑灰色 */
            font-size: 16px; /* 設定文字大小為 16 像素 */
            padding-left: 27px; /* 左側推開 27 像素的內邊距，創造縮排的視覺效果 */
        } /* 結束 .contact .infos .left span 設定 */
        .contact .infos .right{ /* 選取資訊區塊的右半部 (Google 地圖) */
            height: 200px; /* 固定右側區塊的高度為 200 像素 */               
        } /* 結束 .contact .infos .right 設定 */
        .contact .infos .right iframe{ /* 選取右側區塊內的 iframe (嵌入網頁/地圖) 元素 */
            width: 100%; /* 設定 iframe 寬度填滿父元素空間 (100%) */
            height: 100%; /* 設定 iframe 高度填滿父元素空間 (100%) */
            border: 1px solid rgba(39,40,34,0.50); /* 設定 iframe 的邊框為 1 像素實線，顏色為半透明黑灰色 */
        } /* 結束 iframe 設定 */
        /*footer*/ /* 以下是網頁最底部的頁尾區塊設定 */
        .footer{ /* 選取 class 為 footer 的元素 */
            display: flex; /* 啟用 Flexbox 排版 */
            justify-content: center; /* 讓版權宣告的文字水平置中對齊 */
            background-color: rgb(25,26,30); /* 設定頁尾的背景顏色為非常深的黑灰色 */
            padding: 30px 0; /* 設定上下內邊距為 30 像素，左右為 0 像素 */
        } /* 結束 .footer 設定 */
        /*登入畫面css*/ /* 以下是點擊後彈出的隱藏登入視窗設定 */
        .modal { /* 選取 class 為 modal 的元素 */
            display: none; /* 預設將視窗隱藏 (none)，只有點擊按鈕後才會透過 JS 顯示 */
            position: fixed; /* 使用固定定位，讓視窗永遠固定在瀏覽器畫面的特定位置，不隨畫面捲動 */
            z-index: 1; /* 設定層級，確保彈出視窗永遠浮在網頁所有內容的最上層 */
            right: 50; /* (語法有誤，應為50px) 試圖設定右側距離 */
            top: 50; /* (語法有誤，應為50px或50%) 試圖設定頂部距離 */
            width: 20%; /* 設定彈出視窗的寬度佔螢幕寬度的 20% */
            height: 20%; /* 設定彈出視窗的高度佔螢幕高度的 20% */
            overflow: auto; /* 如果視窗內容超過設定的寬高，自動顯示捲軸 */
            background-color: rgba(255,255,255,0.9); /* 設定彈出視窗的背景為帶有 90% 不透明度 (0.9) 的白色 */
            padding-top: 50px; /* 視窗內部上方推開 50 像素的距離 */
        }  /* 結束登入畫面 modal 設定 */
        /*佈告欄*/ /* 以下是佈告欄與其內部表格的樣式設定 */
        .bulletin{ /* 選取 class 為 bulletin 的元素 */
            display: block; /* 設定佈告欄為區塊顯示模式 */
            justify-content: center; /* 此處影響不大 */
            background-color: rgb(255,204,153); /* 設定佈告欄區塊的背景顏色為淺橘色 */
            padding: 30px 0; /* 設定佈告欄的上下內邊距為 30 像素，左右為 0 */

        } /* 結束 .bulletin 設定 */
        .bulletin h1{ /* 選取佈告欄區塊內的 h1 (大標題) 元素 */
            padding:10px; /* 設定大標題四周的內邊距為 10 像素 */
        } /* 結束 .bulletin h1 設定 */
        .bulletin table{ /* 選取佈告欄區塊內的 table (表格) 元素 */
            border-collapse:collapse; /* 讓表格的邊框合併為單一線條，消除儲存格之間的雙重框線 */
            font-family: 微軟正黑體; /* 設定表格內的文字字體為微軟正黑體 */
            font-size:16px; /* 設定表格內的文字大小為 16 像素 */
            border:1px solid #000; /* 設定整個表格的外圍邊框為 1 像素的黑色實線 */
        } /* 結束 .bulletin table 設定 */
        .bulletin table th{ /* 選取表格的 th (標題列儲存格) 元素 */
            background-color: #abdcff; /* 設定表格標題列的背景顏色為淺藍色 */
            color: #ffffff; /* 設定表格標題列的文字顏色為白色 */
        } /* 結束 .bulletin table th 設定 */
        .bulletin table td{ /* 選取表格的 td (一般資料儲存格) 元素 */
            background-color: #ffffff; /* 設定一般資料儲存格的背景顏色為白色 */
            color: #0396ff; /* 設定一般資料儲存格的文字顏色為亮藍色 */
        } /* 結束 .bulletin table td 設定 */
    </style> </head> ```
    <body>
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                　<!---當滑鼠點擊時，login 的區塊把 CSS 顯示狀態改成 block 顯示出來。-->
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <!---點擊叉候，把顯示狀態改成 none (隱藏)，視窗就會隱藏。-->
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                        <!---輸入帳號密碼，按下登入會以post的方式傳送到10.login.php，按下清除會清空帳號和密碼欄位-->
                    </form>
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                // while 迴圈每次從查詢結果$result中抓取一筆資料存入 $row 陣列，直到所有佈告都抓完為止
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    
                    // 資料庫中儲存的 type 數字，轉換成對應的中文字顯示給使用者看
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!---佈告欄--->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
