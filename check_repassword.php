<html>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8" >
	<?php
		session_start(); 
        include("config.php");
		
		$sql = "UPDATE members SET password='".$Password."' WHERE username='".$_SESSION['username']."'";
		if (mysqli_query($con, $sql)) {
			echo "<script type='text/javascript'>alert('เปลี่ยนรหัสผ่านสำเร็จ กรุณาเข้าสู่ระบบใหม่');window.location.href='../index.html';</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}

		mysqli_close($con);
	?>
<html>