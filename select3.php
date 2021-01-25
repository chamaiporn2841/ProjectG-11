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


	$result=mysqli_query($con,"SELECT*FROM benefitprofund");
	$resulttotal=mysqli_query($con,"SELECT*FROM benefittotal");
	
	while($row=mysqli_fetch_array($result)){
	echo $row["pid"]." ".$row["namepn"]." ".$row["position"]." ".$row["category"]." ".$row["born"]." ".$row["Age"]." ".$row["National"]." ".$row["FStatus"]." ".$row["spouse"]." ".$row["NoH"]." ".$row["road"]." ".$row["LLocal"]." ".$row["Amphoe"]." ".$row["province"]." ".$row["Pcode"]." ".$row["Getw"]."".$row["Contribution"];
	echo "<br />";
	}
	while($row=mysqli_fetch_array($resulttotal)){
		echo $row["pid"]." ".$row["namepn"]." ".$row["typebenefit"];
		echo "<br />";
		}
	

	
	mysqli_close($con);
	?>

</body>
</html>