<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入
        $sql="delete from user where id='{$_GET["id"]}'";//建立sql命令，從user資料表刪除GET傳來ID的整筆資料
        
        if (!mysqli_query($conn,$sql)){//執行sql命令
            echo "使用者刪除錯誤";
        }//如果失敗，顯示使用者刪除錯誤
        else{
            echo "使用者刪除成功";
        }//如果成功，顯示使用者刪除成功
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        //3秒後回到使用者管理畫面
    }
?>
