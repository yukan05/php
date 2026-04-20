<?php
$conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");//建立MySQL連線到此IP伺服器、帳號、密碼、資料庫
$result=mysqli_query( $conn,"select * from user");//把 user資料表的所有資料全部抓出來存在 $result
$login=false;//設定登入狀態，預設false

while($row=mysqli_fetch_array($result)){//while迴圈把從資料庫抓出來的所有資料，一筆一筆拿出來檢查
        if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"]))
            $login=true;
}//if 判斷式使用者從網頁表單送過來的帳號與目前資料庫這筆資料的帳號進行比對。如果符合$login 狀態改成 true，代表登入。
 
    if($login==true){//如果登入成功
        session_start();//啟動 Session
        $_SESSION["id"]=$_POST["id"];//讓網頁記得你已登入
        echo "登入成功";//顯示登入成功
        echo "<meta http-equiv=REFRESH content='0,bulletin.php'>";//等待0秒連接到bulletin.php，也就是布告欄
    }
    else {//如果登入失敗
        echo "登入失敗";//顯示登入失敗
        echo "<meta http-equiv=REFRESH content='5,login.html'>";//等待5秒回到login.html，也就是登入畫面
    }
?>
