<?php
	$server = 'localhost';
	$user = 'root';
	$pass = 'giang1350';
	$database = 'learnandcode';

	$conn = mysqli_connect($server, $user, $pass, $database);
	if ($conn) {
		mysqli_query($conn, "SET NAMES 'utf8' ");
		// echo 'Đã kết nối thành công!';
	} else {
		echo 'Kết nối thất bại!';
	}


	if (isset($_GET['delete'])) {
		$MaTL = $_GET['delete'];
		$conn -> query("DELETE FROM tailieu where MaTL = $MaTL");
		header("Location: teacher_file.php");
	}

	if (isset($_GET['delete'])) {
		$MaKH = $_GET['delete'];
		$conn -> query("DELETE FROM khoahoc where MaKH = $MaKH");
		header("Location: teacher_course.php");
	}

	// $query = "Select * from tailieu";

	// $stmt = mysqli_query($connection, $query);

	// while($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
	// 	echo $row['TenTK'].'</br>';
	// }
?>