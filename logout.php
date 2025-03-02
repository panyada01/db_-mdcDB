<?php 
session_start(); //ประกาศใช้ session
session_destroy(); //เคลียร์ค่า session
 header('Location: index1.php'); //Logout เรียบร้อยและกระโดดไปหน้าตามที่ต้องการ
//devbanban.com
?>