<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$hid=$_SESSION['hid'];
		$og=$_POST['og'];
		$check_data = mysqli_query($conn, "SELECT hid FROM organinfo where hid='$hid' && og='$og'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already added this organ.';
			header( "location:../bloodinfo.php?error=".$error );
}else{
		$sql = "INSERT INTO organinfo (og, hid) VALUES ('$og', '$hid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../organinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../organinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>
