<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//建立sql命令，從user資料表找出GET傳來ID的資料
        $row=mysqli_fetch_array($result);//將$result，以陣列形式存入 $row 中。因瀏覽器不能直接讀取所以要轉乘陣列方式
        echo "
        <form method='post' action='20.user_edit.php'>
            <input type='hidden' name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type='text' name='pwd' value='{$row['pwd']}'><p></p>
            <input type=submit value=修改>
        </form>
        ";//顯示帳號不能修改，密碼欄位會顯示舊密碼，按下修改會以post的方式傳送到20.user_edit.php
    }
    }
    ?>
    </body>
</html>
