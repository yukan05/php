<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }//如果未登入，3秒後回到登入畫面
    else{    
        echo "
            <form action='15.user_add.php' method=post'>
                帳號：<input type='text' name='id'><br>
                密碼：<input type='text' name='pwd'><p></p>
                <input type='submit' value='新增'> <input type='reset' value='清除'>
            </form>
        ";//輸入要新增的帳號密碼，按下新增會以post的方式傳送到15.user_add.php，按下清除會清空帳號和密碼欄位
    }
?>
    </body>
</html>
