<?php 
 $id = isset($_GET['id']) ? $_GET['id'] : 0;
 $sql = "DELETE FROM feedback WHERE id = $id";
 if (mysqli_query($conn,$sql)) {
 	header('location: index.php?module=feedback');
 }else {
 	echo 'Lỗi Không Xóa Được Vui Lòng Thử Lại';
 }


 ?>