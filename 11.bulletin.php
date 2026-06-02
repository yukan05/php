<?php
error_reporting(0);//把錯誤提示隱藏
session_start();//啟動 Session
if($_SESSION["id"]==NULL){//如果通行證裡是空的
    echo "請先登入";
    echo "<meta http-equiv=REFRESH content='1;url=2.login.html'>";//1秒後回到login.html，也就是登入畫面
}
else{
echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
    //三個按鈕登出、管理使用者、新增佈告
$conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");
$result=mysqli_query( $conn,"select * from bulletin");//把 bulletin資料表的所有資料全部抓出來」，存在$result

    echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

while ($row=mysqli_fetch_array($result)){//while迴圈把抓出來的布告資料，一筆一筆存成$row。
    echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a><a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
    echo $row["bid"]."</td><td>";
    echo $row["type"]."</td><td>";
    echo $row["title"]."</td><td>";
    echo $row["content"]."</td><td>";
    echo $row["time"]."</td></tr>";
    //echo "<tr> <td>".$row["bid"]."</td> <td>".$row["type"]."</td> <td>".$row["title"]."</td> <td>".$row["content"]."</td> <td>".$row["time"]."</td> </tr>";
    //每次迴圈跑一圈就會印出一組 <tr>（表格的橫列），並在裡面的 <td>（表格的格子）填入這筆資料的編號 (bid)、型態 (type)、標題 (title) 等資訊。                                         
    }
echo "</table>";//關閉 HTML 的表格標籤
}
?>
