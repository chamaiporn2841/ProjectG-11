<html>
<head>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>

	<?php
	include('config.php');

	
	$result=mysqli_query($con,"SELECT*FROM benefitmedical");
	$resulttotal=mysqli_query($con,"SELECT*FROM benefittotal");
	
	while($row=mysqli_fetch_array($result)){
	echo $row["pid"]." ".$row["namepn"]." ".$row["position"]." ".$row["category"]." ".$row["Reveal"]." ".$row["namerl"]."  ".$row["born"]."  ".$row["cinf"]." ".$row["nameinf"]." ".$row["operate"]." ".$row["symptom"]." ".$row["cmoney"]." ".$row["bank"]."".$row["account"];
	echo "<br />";
	}

 
	while($row=mysqli_fetch_array($resulttotal)){
		echo $row["pid"]." ".$row["namepn"]." ".$row["typebenefit"]." ".$row["cmoney"];
		echo "<br />";
		}
	
	
	mysqli_close($con);
	?>

</body>
</html>