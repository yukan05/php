<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {//檢查是否已登入
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   // 顯示選單與表格標題列
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            // 連線資料庫並抓取 user 資料表
            $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
             // 迴圈印出每筆資料與修改和刪除按鈕
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
