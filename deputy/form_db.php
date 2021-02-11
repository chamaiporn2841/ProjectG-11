<?php
$p=$_GET['p'];
if($p=='adddb'){
		$detail = $_POST['typebenefit'];
		$amount = $_POST['cmoney'];
		$sql="INSERT INTO benefittotal
		(typebenefit, cmoney)
		VALUES
		('$typebenefit', '$cmoney')
		";
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_connect_error());
			mysqli_close($con);
	
	if($result){
			echo "<script type='text/javascript'>";
			echo "alert('Add Income Succesfuly');";
			echo "window.location = 'report.php'; ";
			echo "</script>";
			}
			else{
			echo "<script type='text/javascript'>";
			echo "alert('Error!!');";
			echo "window.location = 'report.php'; ";
			echo "</script>";
			}
}
?>