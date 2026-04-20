<?php
    session_start();//啟動 Session。
    unset($_SESSION["id"]);//用來刪除變數，也就是登出
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";//3秒後連結到2.login.html也就是登入頁面）。

?>
