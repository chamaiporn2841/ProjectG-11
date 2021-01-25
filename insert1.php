<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
	$con = mysqli_connect("localhost","root","12345");
	if(!$con) die("Could not connect: " .mysqli_error());

	$con = mysqli_connect("localhost","root","12345");
	if(!$con) die("Could not connect: " .mysqli_error());
	
	
    mysqli_select_db( $con,"employees"); 
	mysqli_query($con,"SET NAMES utf8");

	mysqli_select_db( $con,"employees"); 
	mysqli_query($con,"SET NAMES utf8");
	
	$sql="INSERT INTO benefitmedical(pid, namepn, position, category, Reveal, namerl, born, cinf, nameinf, operate, symptom, cmoney, channel, bank, account) VALUES ('"
	.$_POST["pid"]. "',' "
	.$_POST["namepn"]. "','"
    .$_POST["position"]. "','"
    .$_POST["category"]. "','"
    .$_POST["Reveal"]. "','"
    .$_POST["namerl"]. "','"
    .$_POST["born"]. "','"
    .$_POST["cinf"]. "','"
    .$_POST["nameinf"]. "','"
    .$_POST["operate"]. "','"
    .$_POST["symptom"]. "','"
    .$_POST["cmoney"]. "','"
    .$_POST["channel"]. "','"
	.$_POST["bank"]. "',"
	.$_POST["account"].")";

	$sql="INSERT INTO benefittotal(pid, namepn, typebenefit, cmoney) VALUES ('"
	.$_POST["pid"]. "',' "
	.$_POST["namepn"]. "','"
	.$_POST["typebenefit"]. "',"
	.$_POST["cmoney"].")";
	

	//echo $sql;
	if(!mysqli_query( $con,$sql)){
		die("Error: " .mysqli_error());
	}else {
		echo "บันทึกข้อมูลสำเร็จ ";
	}
	mysqli_close($con);

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