<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$rid=$_SESSION['rid'];
		$og=$_POST['og'];
		$check_data = mysqli_query($conn, "SELECT rid FROM organdinfo where rid='$rid' && og='$og'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already added this organ.';
			header( "location:../organdinfo.php?error=".$error );
}else{
		$sql = "INSERT INTO organdinfo (og, rid) VALUES ('$og', '$rid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../organdinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../organdinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>
