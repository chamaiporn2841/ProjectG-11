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
	
	$result=mysqli_query("SELECT*FROM benefitstudy");
	
	while($row=mysqli_fetch_array($result)){
	echo $row["pid"]." ".$row["namepn"]." ".$row["position"]." ".$row["category"]." ".$row["spouse"]." ".$row["authority"]."  ".$row["child"]."  ".$row["namech"]." ".$row["happen"]." ".$row["arrange"]." ".$row["school"]." ".$row["district"]."  ".$row["grade"]." ".$row["cmoney"]." ".$row["channel"]." ".$row["bank"]."".$row["account"];
	echo "<br />";
	}
	
	mysqli_close($con);
	?>

</body>
</html>