<?php 
	$conn = new mysqli('localhost','root','','ckf') or die('Không thể kết nối được với cơ sở dữ liệu');
	mysqli_query($conn,'SET NAMES UTF8');
?>