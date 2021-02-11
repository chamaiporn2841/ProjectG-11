<html>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
        session_start();
		include("proj_connection.php");
		$appname = $_SESSION["EduRank"]." ".$_SESSION["NThai"];
		
		$sql = "SELECT * FROM form_editprsnl_transaction";

		$result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result)){
			if(isset($_POST[$row['FE_id']])){
		$sql = "    UPDATE form_editprsnl_transaction  set FE_Status='".$_POST["FE_status"]."',FE_note='".$_POST['FE_note']."',
				    FE_AprroveName='$appname' WHERE FE_id='".$row['FE_id']."'";
				 
		mysqli_query($con, $sql);

		if (mysqli_query($con, $sql)) {
			echo "<script type='text/javascript'>alert('อนุมัติคำร้องสำเร็จ');window.location.href='admin_form_tracking.php';</script>";
			
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		}
		}
		mysqli_close($con);
	?>
<html>