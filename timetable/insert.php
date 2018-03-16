<?php  
include 'database.php';
 $connect = mysqli_connect($server, $username, $password, $database); 
 $sql = "INSERT INTO time_table(tiet, t2, t3, t4, t5, t6, t7) VALUES('".$_POST["tiet"]."', '".$_POST["t2"]."', '".$_POST["t3"]."', '".$_POST["t4"]."', '".$_POST["t5"]."', '".$_POST["t6"]."', '".$_POST["t7"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Đã tạo tiết mới.';  
 }  
 ?>