<html>
<head>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>

	<?php
	$con = mysqli_connect("localhost","root","12345");
	if(!$con) die("Could not connect: ".mysqli_error());
	
	mysqli_select_db("employees",$con);
	mysqli_query("SET NAMES UTF8");
	
	$result=mysqli_query("SELECT*FROM benefitfuneral");
	
	while($row=mysqli_fetch_array($result)){
	echo $row["pid"]." ".$row["namepn"]." ".$row["position"]." ".$row["category"]." ".$row["involved "]." ".$row["namedd"]." ".$row["Cultiv"]." ".$row["cmoney"]." ".$row["fileID"]."  ".$row["fileupload"]."  ".$row["dateup"]." ".$row["channel"]." ".$row["bank"]."".$row["account"];
	echo "<br />";
	}
	
	mysqli_close($con);
	?>

</body>
</html>