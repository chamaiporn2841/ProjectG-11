<html>
<head>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
	
	<?php
	include('config.php');
	
	$result=mysqli_query($con,"SELECT*FROM hr");
	
	while($row=mysqli_fetch_array($result)){
	echo $row["requirement_type"]." ".$row["requirement_date"]." ".$row["requirement_text"];
	echo "<br />";
	}
	
	mysqli_close($con);
	?>

</body>
</html>