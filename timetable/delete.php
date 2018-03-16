<?php  
include 'database.php';
 $connect = mysqli_connect($server, $username, $password, $database); 
 $sql = "DELETE FROM time_table WHERE tiet = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Đã xóa tiết.';  
 }  
 ?>