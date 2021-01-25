<html>
<head>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
	
	<?php
	$con = mysqli_connect("localhost","root","12345");
	if(!$con) die("Could not connect: ".mysqli_error());
	
	mysqli_select_db("hr",$con); //เปลี่ยนชื่อฐานข้อมูลตรง employees
	mysqli_query("SET NAMES UTF8");
	
	$result=mysqli_query("SELECT*FROM requirement");
	
	while($row=mysqli_fetch_array($result)){
	echo $row["requirement_type"]." ".$row["requirement_date"]." ".$row["requirement_text"];
	echo "<br />";
	}
	
	mysqli_close($con);
	?>

</body>
</html>