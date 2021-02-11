<?php
	include('proj_connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$username =$_POST["uname"];
	$password = MD5($_POST["password"]);
	$email =$_POST["email"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO members(username, password, email)
			 VALUES('$username', '$password', '$email')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>alert('ลงทะเบียนสำเร็จ');window.location.href='index.html';</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('กรุณาลงทะเบียนใหม่');";
	echo "</script>";
}
?>