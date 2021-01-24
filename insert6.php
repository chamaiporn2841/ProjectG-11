<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
	$con = mysqli_connect("localhost","root","12345");
	if(!$con) die("Could not connect: " .mysqli_error());
	
    mysqli_select_db( $con,"employees"); 
	mysqli_query($con,"SET NAMES utf8");
	
	$sql="INSERT INTO benefitstudy(pid, namepn, position, category, spouse, authority, child, namech, happen, arrange, school, district, grade, cmoney, channel, bank, account) VALUES ('"
	.$_POST["pid"]. "',' "
	.$_POST["namepn"]. "','"
    .$_POST["position"]. "','"
    .$_POST["category"]. "','"
    .$_POST["spouse"]. "','"
    .$_POST["authority"]. "','"
    .$_POST["child"]. "','"
    .$_POST["namech"]. "','"
    .$_POST["happen"]. "','"
    .$_POST["arrange"]. "','"
    .$_POST["school"]. "','"
    .$_POST["district"]. "','"
    .$_POST["grade"]. "','"
    .$_POST["cmoney"]. "','"
    .$_POST["channel"]. "','"
	.$_POST["bank"]. "',"
	.$_POST["account"].")";
	

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