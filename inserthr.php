<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
	$con = mysqli_connect("localhost","root","12345");
	if(!$con) die("Could not connect: " .mysqli_error());
	
    mysqli_select_db( $con,"hr"); 
	mysqli_query($con,"SET NAMES utf8");

	
	$sql="INSERT INTO `requirement`(`requirement_type`, `requirement_date`, `requirement_text`) VALUES ('"
	.$_POST["requirement_type"]. "','"
	.$_POST["requirement_date"]. "','"
    .$_POST["requirement_text"]."');";

	//echo $sql;
	if(!mysqli_query( $con,$sql)){
		die("Error: " .mysqli_error());
	}else {
		echo "บันทึกข้อมูลสำเร็จ ";
	}
	mysqli_close($con);
	?>
</body>
</html>