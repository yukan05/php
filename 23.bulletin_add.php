<?php
    error_reporting(0);// 關閉錯誤回報
    session_start();// 啟動 Session
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入資料庫
        
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        //建立SQL命令，將POST傳來的標題、內容、佈告類型與發布時間新增到bulletin資料表
        
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }//如果執行失敗，顯示新增命令錯誤
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }//如果執行成功，顯示新增佈告成功，並且3秒後回到佈告管理畫面
    }
?>
