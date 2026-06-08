<?php
    error_reporting(0);// 關閉錯誤回報
    session_start();// 啟動 Session
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{
        
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入資料庫
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");//執行SQL命令，從bulletin資料表找出GET傳來bid(佈告編號)的資料
        $row=mysqli_fetch_array($result);//將查詢結果抓取出來，並以陣列形式存入 $row 中
        
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        //用來判斷舊資料的佈告類型，先預設都回空白，再將對應的變數設為checked
        echo "
        <html>
            <head><title>修改佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
        //輸出修改表單，佈告編號使用hidden隱藏欄位傳送；標題、內容與時間欄位皆預設帶入舊資料；單選按鈕則依上方判斷帶入checked狀態。
        //按下修改佈告會將資料送出至 27.bulletin_edit.php，按下清除欄位回到舊資料。
    }
?>
