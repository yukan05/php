<?php
    error_reporting(0);// 關閉錯誤回報
    session_start();// 啟動 Session

    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){//sql命令，更新user資料表裡post傳來帳號的密碼，改成post傳來的密碼
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }//如果失敗，顯示修改錯誤並且3秒後回到使用者管理畫面
        else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }//如果成功，顯示修改成功，三秒鐘後回到網頁並且3秒後回到使用者管理畫面
    }

?>
