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
	
	
	$sql="INSERT INTO benefitprofund(pid, namepn, position, category, born, Age, National, FStatus, spouse, NoH, road, LLocal, Amphoe, province, Pcode, Getw, Contribution) VALUES ('"
	.$_POST["pid"]. "',' "
	.$_POST["namepn"]. "','"
    .$_POST["position"]. "','"
    .$_POST["category"]. "','"
    .$_POST["born"]. "','"
    .$_POST["Age"]. "','"
    .$_POST["National"]. "','"
    .$_POST["FStatus"]. "','"
    .$_POST["spouse"]. "','"
    .$_POST["NoH"]. "','"
    .$_POST["road"]. "','"
    .$_POST["LLocal"]. "','"
    .$_POST["Amphoe"]. "','"
    .$_POST["province"]. "','"
    .$_POST["Pcode"]. "','"
	.$_POST["Getw"]. "','"
	.$_POST["Contribution"]."')";

	$total="INSERT INTO benefittotal(pid, namepn, typebenefit) VALUES ('"
	.$_POST["pid"]. "',' "
	.$_POST["namepn"]. "','"
	.$_POST["typebenefit"]."')";

	//echo $sql;
	if(!mysqli_query( $con,$sql)){
		die("Error: " .mysqli_error());
	}else {
		echo "บันทึกข้อมูลสำเร็จ ";
	}
	

	//echo $sql;
	if(!mysqli_query( $con,$total)){
		die("Error: " .mysqli_error());
	}else {
		echo "บันทึกข้อมูลสำเร็จ ";
	}
	mysqli_close($con);

	?>
</body>
</html>