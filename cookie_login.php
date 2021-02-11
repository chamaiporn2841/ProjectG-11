<?php
session_start();
if(!empty($_POST["login"])) {
	include("proj_connection.php");
	$sql = "Select * from members where username = '" . $_POST["uname"] . "'";
        if(!isset($_COOKIE["uname"])) {
            $sql .= " AND password = '" . md5($_POST["password"]) . "'";
	}
        $result = mysqli_query($con,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["mem_id"] = $user["mem_id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("uname",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["uname"])) {
					setcookie ("uname","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}
?>