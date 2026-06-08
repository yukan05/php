<?php
    error_reporting(0);// 關閉錯誤回報
    session_start();// 啟動 Session
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method='post' action='23.bulletin_add.php'>
                    標    題：<input type='text' name='title'><br>
                    內    容：<br><textarea name='content' rows='20' cols='120'></textarea><br>
                    佈告類型：<input type='radio' name='type' value='1'>系上公告 
                            <input type='radio' name='type' value='2'>獲獎資訊
                            <input type='radio' name='type' value='3'>徵才資訊<br>
                    發布時間：<input type='date' name='time'><p></p>
                    <input type='submit' value='新增佈告'> <input type='reset' value='清除'>
                </form>
            </body>
        </html>
        ";
    }//顯示標題欄位、內容欄位、布告類型選項、發布時間欄位，按下新增佈告送出資料到23.bulletin_add.php，按下清除會清空以上欄位
?>
