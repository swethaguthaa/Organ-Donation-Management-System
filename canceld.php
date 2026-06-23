<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$sql = "DELETE from organdonate where donoid='$donoid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have cancelled request for the organ.";
	header("location:../sentrequestd.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../sentrequestd.php?error=".$error );
    }
    mysqli_close($conn);
?>
