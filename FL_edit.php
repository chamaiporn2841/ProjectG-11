<html>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
        session_start();
		include("proj_connection.php");
		$appname = $_SESSION["EduRank"]." ".$_SESSION["NThai"];
		
		$sql = "SELECT * FROM form_leave_transaction";

		$result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result)){
			if(isset($_POST[$row['FL_id']])){
		$sql = "UPDATE form_leave_transaction  set FL_status='".$_POST["FL_status"]."',FL_note='".$_POST['FL_note']."',
				 FL_approveName='$appname' WHERE FL_id='".$row['FL_id']."'";
				 
		mysqli_query($con, $sql);

		if (mysqli_query($con, $sql)) {
			echo "<script type='text/javascript'>alert('อนุมัติคำร้องสำเร็จ');window.location.href='manaapprove.php';</script>";
			
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		}
		}
		mysqli_close($con);
	?>
<html>