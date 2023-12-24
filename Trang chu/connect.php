<?php
	$connection = mysqli_connect("localhost", "root", "giang1350", "learnandcode");
	if (!$connection) {
		die("Không kết nối được!".mysqli_connect_error());
	} else {
		echo "Kết nối thành công!";
	}

	// $query = "Select * from tailieu";

	// $stmt = mysqli_query($connection, $query);

	// while($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
	// 	echo $row['TenTK'].'</br>';
	// }
?>