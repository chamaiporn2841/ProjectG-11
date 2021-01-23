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
	
	$sql="INSERT INTO benefitfuneral(pid, namepn, position, category, involved, namedd, Cultiv, cmoney, fileID, fileupload, dateup, channel, bank, account) VALUES ("
	.$_POST["pid"]. "',' "
	.$_POST["namepn"]. "','"
    .$_POST["position"]. "','"
    .$_POST["category"]. "','"
    .$_POST["involved"]. "','"
    .$_POST["namedd"]. "','"
    .$_POST["Cultiv"]. "','"
    .$_POST["cmoney"]. "','"
	.$_POST["fileID"]. "','"
	.$_POST["fileupload"]. "','"
	.$_POST["dateup"]. "','"
    .$_POST["channel"]. "','"
	.$_POST["bank"]. "',"
	.$_POST["account"]."');";
	

	echo $sql;
	if(!mysqli_query( $con,$sql)){
		die("Error: " .mysqli_error());
	}else {
		echo "บันทึกข้อมูลสำเร็จ ";
	}

	
?>
