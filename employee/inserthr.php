<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
	include('config.php');

	
	$sql="INSERT INTO `hr`(`requirement_type`, `requirement_date`, `requirement_text`) VALUES ('"
	.$_POST["requirement_type"]. "','"
	.$_POST["requirement_date"]. "','"
    .$_POST["requirement_text"]."');";

	//echo $sql;
	if(!mysqli_query( $con,$sql)){
		die("Error: " .mysqli_connect_error());
	}else {
		echo "บันทึกข้อมูลสำเร็จ ";
	}
	mysqli_close($con);
	?>
</body>
</html>