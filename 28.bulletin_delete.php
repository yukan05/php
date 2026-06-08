<?php
    error_reporting(0);// 關閉錯誤回報
    session_start();// 啟動 Session
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入資料庫
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";//建立SQL命令，GET傳來的bid(佈告編號)刪除該筆佈告資料
        
        
        if (!mysqli_query($conn,$sql)){//執行命令
            echo "佈告刪除錯誤";
        }//如果執行失敗，顯示佈告刪除錯誤
        else{
            echo "佈告刪除成功";
        }//如果執行成功，顯示佈告刪除成功
        
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        //在3秒後回到佈告管理畫面
    }
?>
