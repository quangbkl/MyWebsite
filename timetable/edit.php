<?php  
$key_token = "LTHH";
include 'database.php';
$connect = mysqli_connect($server, $username, $password, $database); 
$id = $_POST['id'];
$text = $_POST['text'];
$column_name = $_POST['column_name'];
$sql = "UPDATE time_table SET ".$column_name."='".$text."' WHERE tiet='".$id."'";
if ($_POST['key'] == $key_token) {
	if(!mysqli_query($connect, $sql)) {  
	  echo 'Không cập nhật được.'; 
	}
} else {
	echo "Key Admin sai.";
}
?>