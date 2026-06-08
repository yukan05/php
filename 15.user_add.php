<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
   echo "請登入帳號";
   echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}//如果未登入，顯示請登入帳號並且3秒後回到登入畫面
else{    

   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");//建立連結和登入
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";//建立sql命令，新增post傳來的帳號和密碼到user資料表
   
   if (!mysqli_query($conn, $sql)) {//登入資料庫並執行sql命令
     echo "新增命令錯誤";
   }//如果失敗，顯示新增命令錯誤
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }//如果成功，3秒後回到管理使用者介面
}
?>
