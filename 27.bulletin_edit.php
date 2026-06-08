<?php

    error_reporting(0);// 關閉錯誤回報
    session_start();// 啟動 Session
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入資料庫
        
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            //執行SQL命令，POST傳來的bid(佈告編號)，將佈告的標題、內容、時間與類型更新為POST傳來的新資料
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }//如果執行失敗，顯示修改錯誤並且3秒後回到佈告欄列表
        else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }//如果執行成功，顯示修改成功，並且3秒後回到佈告欄列表
    }

?>
